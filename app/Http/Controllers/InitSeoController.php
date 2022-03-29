<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DataAPI\Analyztic;
use App\Models\InitSeo;
use App\Models\InitSeoAction;
use App\Models\RelatedKey;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InitSeoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function initSeo($url)
    {
        $baseUrl = auth()->user()->url;
        $email = auth()->user()->email;
        $site = Site::where('sites', $baseUrl)->get();
        if (!Str::contains($site, $baseUrl)) {
            Site::create([
                'sites' => $baseUrl,
                'user_id' => $email
            ]);
        }
        $sites = Site::all();
        $init_seo = InitSeo::all();

        $site_id = InitSeo::where('site_id', $url)->first();

        $init_seo_key = InitSeo::where('site_id', $url)->first();

        if ($site_id) {
            return redirect(route('internal.seo.index', ['url' => $url]));
        } else {
            return view('init_seo.internal-seo', compact('url', 'sites', 'init_seo', 'init_seo_key'));
        }
    }

    public function initSeoStore($url, Request $request)
    {
        $this->validate($request, [
            'type_site' => 'required',
            'keyword_site' => 'required',
            'local_site' => 'required',
        ]);

        $init_seo = new InitSeo();
        $init_seo->user_id = \auth()->user()->email;
        $init_seo->site_id = $url;
        $init_seo->type_site = $request->type_site;
        $init_seo->keyword_site = $request->keyword_site;
        $init_seo->local_site = $request->local_site;
        $init_seo->save();

        return redirect(route('internal.seo.related', ['url' => $url]));
    }

    public function initSeoRelated($url)
    {
        $sites = Site::all();
        $init_seo_key = InitSeo::where('site_id', $url)->first();
        $related_key = DB::table('related_key')->where('site_id', $url)->get();

        return view('init_seo.related-init-seo', compact('url', 'sites', 'init_seo_key', 'related_key'));
    }

    public function initSeoRelatedStore($url, Request $request)
    {
        $this->validate($request, [
            'keyword_id' => 'required',
            'related_site' => 'required',
        ]);

        try {
            $related_key = new RelatedKey();
            $related_key->site_id = $url;
            $related_key->keyword_id = $request->keyword_id;
            $related_key->related_site = $request->related_site;
            $related_key->save();
        } catch (\Throwable $e) {
            report($e);
        }

        return redirect(route('internal.seo.related', ['url' => $url]));
    }

    public function editInitSeo($url, $id)
    {
        $init_seo = InitSeo::find($id);
        $sites = Site::all();
        return view('init_seo.edit-init-seo', compact('init_seo', 'url', 'sites'));
    }

    public function updateInitSeo($url, $id, Request $request)
    {
        $request->validate([
            'keyword_site' => 'required',
            'local_site' => 'required',
        ]);

        $initSeo = InitSeo::find($id);
        //$initSeo->type_site = $request->type_site;
        $initSeo->keyword_site = $request->keyword_site;
        $initSeo->local_site = $request->local_site;
        $rel = RelatedKey::find($id);
        $rel->keyword_id = explode("\r\n", $request->keyword_site);
        $rel->update();
        $initSeo->update();

        $init_seo_ = InitSeo::where('site_id', $url)->first();
        $related_key = DB::table('related_key')->get();
        $domain = new Analyztic();
        [$siteTitle, $dataTitle, $titleCssStyle, $titleNum] = $domain->getTitle('http://' . $url);

        InitSeoAction::truncate();

        foreach (explode("\r\n", $init_seo_->keyword_site) as $key) {
            InitSeoAction::create([
                'action' => '
                                        یه محتوا با کلمه کلیدی <span
                                            style="color: red">' . $key . '</span> بنویس و داخل سایتت
                                        قرار بده بعدش یه لینک با کلمه <span
                                            style="color: green">' . $siteTitle . '</span> بده به صفحه اصلی سایتت. :)
                                    ',
                'baseurl' => $url
            ]);
            foreach (explode("\r\n", $init_seo_->local_site) as $local) {
                InitSeoAction::create([
                    'action' => '
                                            یه محتوا با کلمه کلیدی <span
                                                style="color: red">' . $local . ' در ' . $key . '</span> بنویس و
                                            داخل سایتت قرار بده بعدش یه لینک با کلمه کلیدی <span
                                                style="color: green">' . $key . '</span> بده به صفحه <span
                                                style="color: green">' . $key . '</span> ساخته بودی. :)
                                        ',
                    'baseurl' => $url
                ]);
                foreach ($related_key as $related_val) {
                    foreach (explode("\r\n", $related_val->related_site) as $related_site) {
                        InitSeoAction::create([
                            'action' => '
                                                    یه محتوا با کلمه کلیدی <span
                                                        style="color: red">' . $related_site . '</span>
                                                    بنویس
                                                    و داخل سایتت قرار بده بعدش یه لینک با کلمه <span
                                                        style="color: green">' . $key . '</span> بده به صفحه
                                                    <span style="color : green">' . $key . '</span> که قبلا ساختی. و همچنین یه لینک دیگه با
                                                    عنوان <span
                                                        style="color: blue">' . $key . ' در ' . $local . '</span> بده به
                                                    صفحه <span style="color: blue">' . $key . ' در ' . $local . '</span> که
                                                    ساخته بودی. :)
                                                ',
                            'baseurl' => $url
                        ]);
                    }
                }
            }
        }

        return redirect(route('edit.init.seo.related', ['url' => $url, 'id' => $id]));
    }

    public function editInitSeoRelated($url, $id)
    {
        $sites = Site::all();
        $init_seo_key = InitSeo::where('site_id', $url)->first();
        $related_key = DB::table('related_key')->where('site_id', $url)->get();
        return view('init_seo.edit-related-init-seo', compact('id', 'init_seo_key', 'related_key', 'url', 'sites'));
    }

    public function updateInitSeoRelated($url, $id, Request $request)
    {
        $request->validate([
            'related_site' => 'required',
        ]);

        DB::table('related_key')->where('id', $id)->update([
            'related_site' => $request->related_site
        ]);

        $init_seo_ = InitSeo::where('site_id', $url)->first();
        $related_key = DB::table('related_key')->get();
        $domain = new Analyztic();
        [$siteTitle, $dataTitle, $titleCssStyle, $titleNum] = $domain->getTitle('http://' . $url);

        InitSeoAction::truncate();

        foreach (explode("\r\n", $init_seo_->keyword_site) as $key) {
            InitSeoAction::create([
                'action' => '
                                        یه محتوا با کلمه کلیدی <span
                                            style="color: red">' . $key . '</span> بنویس و داخل سایتت
                                        قرار بده بعدش یه لینک با کلمه <span
                                            style="color: green">' . $siteTitle . '</span> بده به صفحه اصلی سایتت. :)
                                    ',
                'baseurl' => $url
            ]);
            foreach (explode("\r\n", $init_seo_->local_site) as $local) {
                InitSeoAction::create([
                    'action' => '
                                            یه محتوا با کلمه کلیدی <span
                                                style="color: red">' . $local . ' در ' . $key . '</span> بنویس و
                                            داخل سایتت قرار بده بعدش یه لینک با کلمه کلیدی <span
                                                style="color: green">' . $key . '</span> بده به صفحه <span
                                                style="color: green">' . $key . '</span> ساخته بودی. :)
                                        ',
                    'baseurl' => $url
                ]);
                foreach ($related_key as $related_val) {
                    foreach (explode("\r\n", $related_val->related_site) as $related_site) {
                        InitSeoAction::create([
                            'action' => '
                                                    یه محتوا با کلمه کلیدی <span
                                                        style="color: red">' . $related_site . '</span>
                                                    بنویس
                                                    و داخل سایتت قرار بده بعدش یه لینک با کلمه <span
                                                        style="color: green">' . $key . '</span> بده به صفحه
                                                    <span style="color : green">' . $key . '</span> که قبلا ساختی. و همچنین یه لینک دیگه با
                                                    عنوان <span
                                                        style="color: blue">' . $key . ' در ' . $local . '</span> بده به
                                                    صفحه <span style="color: blue">' . $key . ' در ' . $local . '</span> که
                                                    ساخته بودی. :)
                                                ',
                            'baseurl' => $url
                        ]);
                    }
                }
            }
        }

        return redirect(route('edit.init.seo.related', ['url' => $url, 'id' => $id]));
    }

    public function initSeoIndex($url)
    {
        $init_seo = InitSeo::all();
        $init_seo_ = InitSeo::where('site_id', $url)->first();
        $related_key = DB::table('related_key')->get();
        $domain = new Analyztic();
        [$siteTitle, $dataTitle, $titleCssStyle, $titleNum] = $domain->getTitle('http://' . $url);
        $sites = Site::all();
        $init_seo_action = InitSeoAction::where('baseurl', $url)->first();
        if (empty($init_seo_action)) {
            foreach (explode("\r\n", $init_seo_->keyword_site) as $key) {
                InitSeoAction::create([
                    'action' => '
                                        یه محتوا با کلمه کلیدی <span
                                            style="color: red">' . $key . '</span> بنویس و داخل سایتت
                                        قرار بده بعدش یه لینک با کلمه <span
                                            style="color: green">' . $siteTitle . '</span> بده به صفحه اصلی سایتت. :)
                                    ',
                    'baseurl' => $url
                ]);
                foreach (explode("\r\n", $init_seo_->local_site) as $local) {
                    InitSeoAction::create([
                        'action' => '
                                            یه محتوا با کلمه کلیدی <span
                                                style="color: red">' . $local . ' در ' . $key . '</span> بنویس و
                                            داخل سایتت قرار بده بعدش یه لینک با کلمه کلیدی <span
                                                style="color: green">' . $key . '</span> بده به صفحه <span
                                                style="color: green">' . $key . '</span> ساخته بودی. :)
                                        ',
                        'baseurl' => $url
                    ]);
                    foreach ($related_key as $related_val) {
                        foreach (explode("\r\n", $related_val->related_site) as $related_site) {
                            InitSeoAction::create([
                                'action' => '
                                                    یه محتوا با کلمه کلیدی <span
                                                        style="color: red">' . $related_site . '</span>
                                                    بنویس
                                                    و داخل سایتت قرار بده بعدش یه لینک با کلمه <span
                                                        style="color: green">' . $key . '</span> بده به صفحه
                                                    <span style="color : green">' . $key . '</span> که قبلا ساختی. و همچنین یه لینک دیگه با
                                                    عنوان <span
                                                        style="color: blue">' . $key . ' در ' . $local . '</span> بده به
                                                    صفحه <span style="color: blue">' . $key . ' در ' . $local . '</span> که
                                                    ساخته بودی. :)
                                                ',
                                'baseurl' => $url
                            ]);
                        }
                    }
                }
            }
        }
        $init_seo_action = InitSeoAction::latest()->paginate(5);
        return view('init_seo.internal-seo-index', compact('url', 'sites', 'init_seo', 'init_seo_', 'siteTitle', 'related_key', 'init_seo_action'));
    }

    public function addUrl($url, $id, Request $request)
    {
        $request->validate([
            'url' => 'required',
        ]);

        $done = '1';
        $initseoaction = InitSeoAction::find($id);

        $initseoaction->url = $request->url;
        $initseoaction->done = $done;
        $initseoaction->update();

        return redirect(route('internal.seo.index', ['url' => $url]));
    }
}
