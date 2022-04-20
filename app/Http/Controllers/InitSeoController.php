<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DataAPI\Analyztic;
use App\Models\ActionUrl;
use App\Models\InitSeo;
use App\Models\InitSeoAction;
use App\Models\OffSeoAction;
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
        $initSeo->update();

        $allInit = InitSeo::all();
        $key = explode("\r\n", $request->keyword_site);
        foreach ($key as $val) {
            if (!RelatedKey::where('keyword_id', $val)->first()) {
                RelatedKey::create([
                    'site_id' => $url,
                    'keyword_id' => $val
                ]);
            }

        }

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
                'baseurl' => $url,
                'keyword' => $key,
            ]);
            foreach (explode("\r\n", $init_seo_->local_site) as $local) {
                InitSeoAction::create([
                    'action' => '
                                            یه محتوا با کلمه کلیدی <span
                                                style="color: red">' . $key . ' در ' . $local . '</span> بنویس و
                                            داخل سایتت قرار بده بعدش یه لینک با کلمه کلیدی <span
                                                style="color: green">' . $key . '</span> بده به صفحه <span
                                                style="color: green">' . $key . '</span> ساخته بودی. :)
                                        ',
                    'baseurl' => $url,
                    'keyword' => $key,
                    'local' => $key . 'در' . $local,
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
                            'baseurl' => $url,
                            'keyword' => $key,
                            'local' => $key . 'در' . $local,
                            'related_keyword' => $related_site,
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
                'baseurl' => $url,
                'keyword' => $key
            ]);
            foreach (explode("\r\n", $init_seo_->local_site) as $local) {
                InitSeoAction::create([
                    'action' => '
                                            یه محتوا با کلمه کلیدی <span
                                                style="color: red">' . $key . ' در ' . $local . '</span> بنویس و
                                            داخل سایتت قرار بده بعدش یه لینک با کلمه کلیدی <span
                                                style="color: green">' . $key . '</span> بده به صفحه <span
                                                style="color: green">' . $key . '</span> ساخته بودی. :)
                                        ',
                    'baseurl' => $url,
                    'keyword' => $key,
                    'local' => $key . 'در' . $local,
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
                            'baseurl' => $url,
                            'keyword' => $key,
                            'local' => $key . 'در' . $local,
                            'related_keyword' => $related_site,
                        ]);
                    }
                }
            }
        }

        OffSeoAction::truncate();

        $off_seo_ = InitSeo::where('site_id', $url)->first();
        $profileLink = array(
            'https://social.msdn.microsoft.com/	',
            'http://github.com/',
            'https://profiles.wordpress.org/',
            'https://issuu.com/',
            'https://en.gravatar.com/',
            'https://www.ted.com/',
            'http://flgclassifieds.cce.cornell.edu/',
            'https://setiathome.berkeley.edu/',
            'https://www.buzzfeed.com/',
            'https://www.lonelyplanet.com/',
            'https://www.mixcloud.com/',
            'https://about.me/',
            'https://hubpages.com/',
            'https://giphy.com/',
            'https://codepen.io/',
            'https://www.patreon.com/',
            'https://disqus.com/',
            'https://typeform.com/',
            'https://www.diigo.com/',
            'http://telegra.ph/',
            'https://500px.com/',
            'https://qiita.com/',
            'http://www.folkd.com/',
            'https://ello.co/',
            'https://soundcloud.com/',
            'http://coub.com/',
            'https://visual.ly/',
            'http://visual.ly/',
            'https://www.goodreads.com/',
            'https://www.openstreetmap.org/',
            'https://ello.co/',
            'https://weheartit.com/',
            'https://visual.ly/',
            'https://www.intensedebate.com/',
            'https://www.goodreads.com/',
            'http://forums.qrecall.com/',
            'https://www.gamespot.com/',
            'https://www.openstreetmap.org/',
            'https://soundcloud.com/',
            'https://www.instapaper.com/',
            'http://www.webestools.com/',
            'https://www.minds.com/',
            'https://penzu.com/',
            'http://orcid.org/',
            'http://librarything.com/',
        );
        $social = array('http://instagram.com', 'http://facebook.com', 'http://linkedin.com', 'http://twitter.com', 'http://pinterest.com', 'http://medium.com', 'http://youtube.com', 'http://tomblr.com');
        $blogs = array('imag.blog', 'blogfa.com', 'blog.ir', 'rozblog.ir', 'virgool.io');
        $threeblog = array('imag.blog', 'blogfa.com', 'blog.ir', 'rozblog.ir');

        foreach ($blogs as $blog) {
            OffSeoAction::create([
                'action' => '
                                        برو تو سایت <span style="color : green">' . $blog . '</span> ثبت نام کن با عنوان
                                        مشابه <span style="color : red">' . $siteTitle . '</span> یه حساب کاربری ایجاد
                                        کن اطلاعات حسابت از جمله آدرس، شماره تلفن، درباره ما، و سایر موارد مورد نیاز
                                        رو تکمیل کن. :)
                                    ',
                'baseurl' => $url,
            ]);
        }

        foreach ($threeblog as $b) {
            foreach (explode("\r\n", $off_seo_->keyword_site) as $key) {
                OffSeoAction::create([
                    'action' => '
                                            محتوایی رو که با کلمه کلیدی <span
                                                style="color : green">' . $key . '</span> ساخته بودی با یه
                                            تغییر کوچک در نگارش محتوا
                                            داخل سایت <span style="color : blue">' . $b . '</span> قرار بده
                                            و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                            منبع کوتاه کننده لینک آخر محتوا بزار. :)
                                        ',
                    'baseurl' => $url,
                ]);
            }
            foreach (explode("\r\n", $off_seo_->local_site) as $local) {
                OffSeoAction::create([
                    'action' => '
                                            محتوایی رو که با کلمه کلیدی <span
                                                style="color : green">' . $key . ' در ' . $local . '</span> ساخته بودی با یه
                                            تغییر کوچک در نگارش محتوا
                                            داخل سایت <span style="color : blue">' . $b . '</span> قرار بده
                                            و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                            منبع کوتاه کننده لینک آخر محتوا بزار. :)
                                        ',
                    'baseurl' => $url,
                ]);
            }
            foreach ($related_key as $related_val) {
                foreach (explode("\r\n", $related_val->related_site) as $rel) {
                    OffSeoAction::create([
                        'action' => '
                                                محتوایی رو که با کلمه کلیدی <span
                                                    style="color : green">' . $rel . '</span> ساخته بودی با یه
                                                تغییر کوچک در نگارش محتوا
                                                داخل سایت <span style="color : blue">' . $b . '</span> قرار بده
                                                و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                                منبع کوتاه کننده لینک آخر محتوا بزار. :)
                                            ',
                        'baseurl' => $url,
                    ]);
                }
            }
        }

        foreach ($threeblog as $b) {
            foreach (explode("\r\n", $off_seo_->keyword_site) as $key) {
                OffSeoAction::create([
                    'action' => '
                                            محتوایی رو که با کلمه کلیدی <span
                                                style="color : green">' . $key . '</span> ساخته بودی با یه
                                            تغییر کوچک در نگارش محتوا
                                            داخل سایت <span style="color : blue">' . $b . '</span> قرار بده
                                            و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                            منبع کوتاه کننده لینک آخر محتوا بزار و همچنین یه لینک کوتاه از کلمه کلیدی
                                            <span style="color:blue">' . $key . '</span> بساز و کلمه
                                            کلیدی اصلی محتواتو لینک بده به صفحه <span style="color:blue">' . $key . '</span>
                                            . :)
                                        ',
                    'baseurl' => $url,
                ]);
            }
            foreach (explode("\r\n", $off_seo_->local_site) as $local) {
                OffSeoAction::create([
                    'action' => '
                                            محتوایی رو که با کلمه کلیدی <span
                                                style="color : green">' . $key . ' در ' . $local . '</span> ساخته بودی با یه
                                            تغییر کوچک در نگارش محتوا
                                            داخل سایت <span style="color : blue">' . $b . '</span> قرار بده
                                            و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                            منبع کوتاه کننده لینک آخر محتوا بزار و همچنین یه لینک کوتاه از کلمه کلیدی
                                            <span style="color:blue">' . $key . '</span> بساز و کلمه
                                            کلیدی اصلی محتواتو لینک بده به صفحه <span style="color:blue">' . $key . '</span>
                                            . :)
                                        ',
                    'baseurl' => $url,
                ]);
            }
            foreach ($related_key as $related_val) {
                foreach (explode("\r\n", $related_val->related_site) as $rel) {
                    OffSeoAction::create([
                        'action' => '
                                                محتوایی رو که با کلمه کلیدی <span
                                                    style="color : green">' . $rel . '</span> ساخته بودی با یه
                                                تغییر کوچک در نگارش محتوا
                                                داخل سایت <span style="color : blue">' . $b . '</span> قرار بده
                                                و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                                منبع کوتاه کننده لینک آخر محتوا بزار و همچنین یه لینک کوتاه از کلمه
                                                کلیدی <span style="color:blue">' . $key . '</span> بساز و کلمه
                                                کلیدی اصلی محتواتو لینک بده به صفحه <span
                                                    style="color:blue">' . $key . '</span> . :)
                                            ',
                        'baseurl' => $url,
                    ]);
                }
            }
        }

        foreach (explode("\r\n", $off_seo_->keyword_site) as $key) {
            OffSeoAction::create([
                'action' => '
                                        محتوایی با کللمه کلیدی <span style="color: green">' . $key . '</span> که
                                        ساخته بودی با یه تغییر کوچک نگارشی داخل سایت <a
                                            href="https://virgool.io">ویرگول</a> بدون هیچ لینکی قرار بده. :)
                                    ',
                'baseurl' => $url,
            ]);
        }

        foreach (explode("\r\n", $off_seo_->local_site) as $local) {
            OffSeoAction::create([
                'action' => '
                                        محتوایی با کللمه کلیدی <span style="color: green">' . $key . ' در ' . $local . '</span>
                                        که ساخته بودی با یه تغییر کوچک نگارشی داخل سایت <a
                                            href="https://virgool.io">ویرگول</a> بدون هیچ لینکی قرار بده. :)
                                    ',
                'baseurl' => $url,
            ]);
        }

        foreach ($related_key as $related_val) {
            foreach (explode("\r\n", $related_val->related_site) as $rel) {
                OffSeoAction::create([
                    'action' => '
                                            محتوایی با کللمه کلیدی <span style="color: green">' . $rel . '</span> که
                                            ساخته بودی با یه تغییر کوچک نگارشی داخل سایت <a
                                                href="https://virgool.io">ویرگول</a> بدون هیچ لینکی قرار بده. :)
                                        ',
                    'baseurl' => $url,
                ]);
            }
        }

        foreach ($profileLink as $pl) {
            OffSeoAction::create([
                'action' => '
                                        برو داخل سایت <a href="' . $pl . '">' . $pl . '</a> طبق راهنما یک پروفایل درست کنو آدرس
                                        سایت خودتو قرار بده.
                                    ',
                'baseurl' => $url,
            ]);
        }

        foreach ($social as $so) {
            OffSeoAction::create([
                'action' => '
                                        برو داخل <a href="' . $so . '">' . $so . '</a> یه حساب کاربری به اسم <span
                                            style="color: red">' . $siteTitle . '</span> بساز. :)
                                    ',
                'baseurl' => $url,
            ]);
        }

        foreach (explode("\r\n", $off_seo_->keyword_site) as $offseo) {
            OffSeoAction::create([
                'action' => '
                                        یه محتوا با موضوع <span style="color: green">' . $offseo . '</span> بنویس و به عنوان
                                        ریپورتاژ در یکی از سایت های خبری منتشر کن و یه لینک با کلمه کلیدی <span
                                            style="color: green">' . $offseo . '</span> به صفحه <span
                                            style="color: green">' . $offseo . '</span> بده. :)
                                    ',
                'baseurl' => $url,
            ]);
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
                    'baseurl' => $url,
                    'keyword' => $key
                ]);
                foreach (explode("\r\n", $init_seo_->local_site) as $local) {
                    InitSeoAction::create([
                        'action' => '
                                            یه محتوا با کلمه کلیدی <span
                                                style="color: red">' . $key . ' در ' . $local . '</span> بنویس و
                                            داخل سایتت قرار بده بعدش یه لینک با کلمه کلیدی <span
                                                style="color: green">' . $key . '</span> بده به صفحه <span
                                                style="color: green">' . $key . '</span> ساخته بودی. :)
                                        ',
                        'baseurl' => $url,
                        'keyword' => $key,
                        'local' => $key . 'در' . $local,
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
                                'baseurl' => $url,
                                'keyword' => $key,
                                'local' => $key . 'در' . $local,
                                'related_keyword' => $related_site,
                            ]);
                        }
                    }
                }
            }
        }

        $off_seo_ = InitSeo::where('site_id', $url)->first();
        $profileLink = array(
            'https://social.msdn.microsoft.com/	',
            'http://github.com/',
            'https://profiles.wordpress.org/',
            'https://issuu.com/',
            'https://en.gravatar.com/',
            'https://www.ted.com/',
            'http://flgclassifieds.cce.cornell.edu/',
            'https://setiathome.berkeley.edu/',
            'https://www.buzzfeed.com/',
            'https://www.lonelyplanet.com/',
            'https://www.mixcloud.com/',
            'https://about.me/',
            'https://hubpages.com/',
            'https://giphy.com/',
            'https://codepen.io/',
            'https://www.patreon.com/',
            'https://disqus.com/',
            'https://typeform.com/',
            'https://www.diigo.com/',
            'http://telegra.ph/',
            'https://500px.com/',
            'https://qiita.com/',
            'http://www.folkd.com/',
            'https://ello.co/',
            'https://soundcloud.com/',
            'http://coub.com/',
            'https://visual.ly/',
            'http://visual.ly/',
            'https://www.goodreads.com/',
            'https://www.openstreetmap.org/',
            'https://ello.co/',
            'https://weheartit.com/',
            'https://visual.ly/',
            'https://www.intensedebate.com/',
            'https://www.goodreads.com/',
            'http://forums.qrecall.com/',
            'https://www.gamespot.com/',
            'https://www.openstreetmap.org/',
            'https://soundcloud.com/',
            'https://www.instapaper.com/',
            'http://www.webestools.com/',
            'https://www.minds.com/',
            'https://penzu.com/',
            'http://orcid.org/',
            'http://librarything.com/',
        );
        $social = array('http://instagram.com', 'http://facebook.com', 'http://linkedin.com', 'http://twitter.com', 'http://pinterest.com', 'http://medium.com', 'http://youtube.com', 'http://tomblr.com');
        $blogs = array('imag.blog', 'blogfa.com', 'blog.ir', 'rozblog.ir', 'virgool.io');
        $threeblog = array('imag.blog', 'blogfa.com', 'blog.ir', 'rozblog.ir');

        foreach ($blogs as $blog) {
            OffSeoAction::create([
                'action' => '
                                        برو تو سایت <span style="color : green">' . $blog . '</span> ثبت نام کن با عنوان
                                        مشابه <span style="color : red">' . $siteTitle . '</span> یه حساب کاربری ایجاد
                                        کن اطلاعات حسابت از جمله آدرس، شماره تلفن، درباره ما، و سایر موارد مورد نیاز
                                        رو تکمیل کن. :)
                                    ',
                'baseurl' => $url,
            ]);
        }

        foreach ($threeblog as $b) {
            foreach (explode("\r\n", $off_seo_->keyword_site) as $key) {
                OffSeoAction::create([
                    'action' => '
                                            محتوایی رو که با کلمه کلیدی <span
                                                style="color : green">' . $key . '</span> ساخته بودی با یه
                                            تغییر کوچک در نگارش محتوا
                                            داخل سایت <span style="color : blue">' . $b . '</span> قرار بده
                                            و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                            منبع کوتاه کننده لینک آخر محتوا بزار. :)
                                        ',
                    'baseurl' => $url,
                ]);
            }
            foreach (explode("\r\n", $off_seo_->local_site) as $local) {
                OffSeoAction::create([
                    'action' => '
                                            محتوایی رو که با کلمه کلیدی <span
                                                style="color : green">' . $key . ' در ' . $local . '</span> ساخته بودی با یه
                                            تغییر کوچک در نگارش محتوا
                                            داخل سایت <span style="color : blue">' . $b . '</span> قرار بده
                                            و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                            منبع کوتاه کننده لینک آخر محتوا بزار. :)
                                        ',
                    'baseurl' => $url,
                ]);
            }
            foreach ($related_key as $related_val) {
                foreach (explode("\r\n", $related_val->related_site) as $rel) {
                    OffSeoAction::create([
                        'action' => '
                                                محتوایی رو که با کلمه کلیدی <span
                                                    style="color : green">' . $rel . '</span> ساخته بودی با یه
                                                تغییر کوچک در نگارش محتوا
                                                داخل سایت <span style="color : blue">' . $b . '</span> قرار بده
                                                و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                                منبع کوتاه کننده لینک آخر محتوا بزار. :)
                                            ',
                        'baseurl' => $url,
                    ]);
                }
            }
        }

        foreach ($threeblog as $b) {
            foreach (explode("\r\n", $off_seo_->keyword_site) as $key) {
                OffSeoAction::create([
                    'action' => '
                                            محتوایی رو که با کلمه کلیدی <span
                                                style="color : green">' . $key . '</span> ساخته بودی با یه
                                            تغییر کوچک در نگارش محتوا
                                            داخل سایت <span style="color : blue">' . $b . '</span> قرار بده
                                            و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                            منبع کوتاه کننده لینک آخر محتوا بزار و همچنین یه لینک کوتاه از کلمه کلیدی
                                            <span style="color:blue">' . $key . '</span> بساز و کلمه
                                            کلیدی اصلی محتواتو لینک بده به صفحه <span style="color:blue">' . $key . '</span>
                                            . :)
                                        ',
                    'baseurl' => $url,
                ]);
            }
            foreach (explode("\r\n", $off_seo_->local_site) as $local) {
                OffSeoAction::create([
                    'action' => '
                                            محتوایی رو که با کلمه کلیدی <span
                                                style="color : green">' . $key . ' در ' . $local . '</span> ساخته بودی با یه
                                            تغییر کوچک در نگارش محتوا
                                            داخل سایت <span style="color : blue">' . $b . '</span> قرار بده
                                            و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                            منبع کوتاه کننده لینک آخر محتوا بزار و همچنین یه لینک کوتاه از کلمه کلیدی
                                            <span style="color:blue">' . $key . '</span> بساز و کلمه
                                            کلیدی اصلی محتواتو لینک بده به صفحه <span style="color:blue">' . $key . '</span>
                                            . :)
                                        ',
                    'baseurl' => $url,
                ]);
            }
            foreach ($related_key as $related_val) {
                foreach (explode("\r\n", $related_val->related_site) as $rel) {
                    OffSeoAction::create([
                        'action' => '
                                                محتوایی رو که با کلمه کلیدی <span
                                                    style="color : green">' . $rel . '</span> ساخته بودی با یه
                                                تغییر کوچک در نگارش محتوا
                                                داخل سایت <span style="color : blue">' . $b . '</span> قرار بده
                                                و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                                منبع کوتاه کننده لینک آخر محتوا بزار و همچنین یه لینک کوتاه از کلمه
                                                کلیدی <span style="color:blue">' . $key . '</span> بساز و کلمه
                                                کلیدی اصلی محتواتو لینک بده به صفحه <span
                                                    style="color:blue">' . $key . '</span> . :)
                                            ',
                        'baseurl' => $url,
                    ]);
                }
            }
        }

        foreach (explode("\r\n", $off_seo_->keyword_site) as $key) {
            OffSeoAction::create([
                'action' => '
                                        محتوایی با کللمه کلیدی <span style="color: green">' . $key . '</span> که
                                        ساخته بودی با یه تغییر کوچک نگارشی داخل سایت <a
                                            href="https://virgool.io">ویرگول</a> بدون هیچ لینکی قرار بده. :)
                                    ',
                'baseurl' => $url,
            ]);
        }

        foreach (explode("\r\n", $off_seo_->local_site) as $local) {
            OffSeoAction::create([
                'action' => '
                                        محتوایی با کللمه کلیدی <span style="color: green">' . $key . ' در ' . $local . '</span>
                                        که ساخته بودی با یه تغییر کوچک نگارشی داخل سایت <a
                                            href="https://virgool.io">ویرگول</a> بدون هیچ لینکی قرار بده. :)
                                    ',
                'baseurl' => $url,
            ]);
        }

        foreach ($related_key as $related_val) {
            foreach (explode("\r\n", $related_val->related_site) as $rel) {
                OffSeoAction::create([
                    'action' => '
                                            محتوایی با کللمه کلیدی <span style="color: green">' . $rel . '</span> که
                                            ساخته بودی با یه تغییر کوچک نگارشی داخل سایت <a
                                                href="https://virgool.io">ویرگول</a> بدون هیچ لینکی قرار بده. :)
                                        ',
                    'baseurl' => $url,
                ]);
            }
        }

        foreach ($profileLink as $pl) {
            OffSeoAction::create([
                'action' => '
                                        برو داخل سایت <a href="' . $pl . '">' . $pl . '</a> طبق راهنما یک پروفایل درست کنو آدرس
                                        سایت خودتو قرار بده.
                                    ',
                'baseurl' => $url,
            ]);
        }

        foreach ($social as $so) {
            OffSeoAction::create([
                'action' => '
                                        برو داخل <a href="' . $so . '">' . $so . '</a> یه حساب کاربری به اسم <span
                                            style="color: red">' . $siteTitle . '</span> بساز. :)
                                    ',
                'baseurl' => $url,
            ]);
        }

        foreach (explode("\r\n", $off_seo_->keyword_site) as $offseo) {
            OffSeoAction::create([
                'action' => '
                                        یه محتوا با موضوع <span style="color: green">' . $offseo . '</span> بنویس و به عنوان
                                        ریپورتاژ در یکی از سایت های خبری منتشر کن و یه لینک با کلمه کلیدی <span
                                            style="color: green">' . $offseo . '</span> به صفحه <span
                                            style="color: green">' . $offseo . '</span> بده. :)
                                    ',
                'baseurl' => $url,
            ]);
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
