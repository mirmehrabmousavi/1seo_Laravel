<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DataAPI\Analyztic;
use App\Models\InitSeo;
use App\Models\OffSeoAction;
use App\Models\Site;
use Illuminate\Support\Facades\DB;

class OffSeoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function OffSeoIndex($url)
    {
        $off_seo = InitSeo::all();
        $off_seo_ = InitSeo::where('site_id', $url)->first();
        $related_key = DB::table('related_key')->/*paginate(1)*/get();
        $domain = new Analyztic();
        [$siteTitle, $dataTitle, $titleCssStyle, $titleNum] = $domain->getTitle('http://' . $url);
        $sites = Site::all();

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
        $social = array('http://instagram.com','http://facebook.com','http://linkedin.com','http://twitter.com','http://pinterest.com','http://medium.com','http://youtube.com','http://tomblr.com');
        $blogs = array('imag.blog','blogfa.com','blog.ir','rozblog.ir','virgool.io');
        $threeblog = array('imag.blog','blogfa.com','blog.ir','rozblog.ir');

        $off_seo_action = OffSeoAction::all();
        if($off_seo_action->isEmpty()) {
            foreach($blogs as $blog) {
                OffSeoAction::create([
                    'action' => '
                                        برو تو سایت <span style="color : green">'.$blog.'</span> ثبت نام کن با عنوان
                                        مشابه <span style="color : red">'.$siteTitle.'</span> یه حساب کاربری ایجاد
                                        کن اطلاعات حسابت از جمله آدرس، شماره تلفن، درباره ما، و سایر موارد مورد نیاز
                                        رو تکمیل کن. :)
                                    ',
                    'baseurl' => $url,
                ]);
            }

            foreach($threeblog as $b) {
                foreach(explode("\r\n",$off_seo_->keyword_site) as $key) {
                    OffSeoAction::create([
                       'action' => '
                                            محتوایی رو که با کلمه کلیدی <span
                                                style="color : green">'.$key.'</span> ساخته بودی با یه
                                            تغییر کوچک در نگارش محتوا
                                            داخل سایت <span style="color : blue">'.$b.'</span> قرار بده
                                            و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                            منبع کوتاه کننده لینک آخر محتوا بزار. :)
                                        ',
                       'baseurl' => $url,
                    ]);
                }
                foreach(explode("\r\n",$off_seo_->local_site) as $local) {
                    OffSeoAction::create([
                        'action' => '
                                            محتوایی رو که با کلمه کلیدی <span
                                                style="color : green">' . $local . ' در '.$key. '</span> ساخته بودی با یه
                                            تغییر کوچک در نگارش محتوا
                                            داخل سایت <span style="color : blue">'.$b.'</span> قرار بده
                                            و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                            منبع کوتاه کننده لینک آخر محتوا بزار. :)
                                        ',
                        'baseurl' => $url,
                    ]);
                }
                foreach($related_key as $related_val) {
                    foreach(explode("\r\n",$related_val->related_site) as $rel) {
                        OffSeoAction::create([
                            'action' => '
                                                محتوایی رو که با کلمه کلیدی <span
                                                    style="color : green">'.$rel.'</span> ساخته بودی با یه
                                                تغییر کوچک در نگارش محتوا
                                                داخل سایت <span style="color : blue">'.$b.'</span> قرار بده
                                                و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                                منبع کوتاه کننده لینک آخر محتوا بزار. :)
                                            ',
                            'baseurl' => $url,
                        ]);
                    }
                }
            }

            foreach($threeblog as $b) {
                foreach(explode("\r\n",$off_seo_->keyword_site) as $key) {
                    OffSeoAction::create([
                        'action' => '
                                            محتوایی رو که با کلمه کلیدی <span
                                                style="color : green">'.$key.'</span> ساخته بودی با یه
                                            تغییر کوچک در نگارش محتوا
                                            داخل سایت <span style="color : blue">'.$b.'</span> قرار بده
                                            و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                            منبع کوتاه کننده لینک آخر محتوا بزار و همچنین یه لینک کوتاه از کلمه کلیدی
                                            <span style="color:blue">'.$key.'</span> بساز و کلمه
                                            کلیدی اصلی محتواتو لینک بده به صفحه <span style="color:blue">'.$key.'</span>
                                            . :)
                                        ',
                        'baseurl' => $url,
                    ]);
                }
                foreach(explode("\r\n",$off_seo_->local_site) as $local) {
                    OffSeoAction::create([
                        'action' => '
                                            محتوایی رو که با کلمه کلیدی <span
                                                style="color : green">' . $local . ' در '.$key. '</span> ساخته بودی با یه
                                            تغییر کوچک در نگارش محتوا
                                            داخل سایت <span style="color : blue">'.$b.'</span> قرار بده
                                            و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                            منبع کوتاه کننده لینک آخر محتوا بزار و همچنین یه لینک کوتاه از کلمه کلیدی
                                            <span style="color:blue">'.$key.'</span> بساز و کلمه
                                            کلیدی اصلی محتواتو لینک بده به صفحه <span style="color:blue">'.$key.'</span>
                                            . :)
                                        ',
                        'baseurl' => $url,
                    ]);
                }
                foreach($related_key as $related_val) {
                    foreach(explode("\r\n",$related_val->related_site) as $rel) {
                        OffSeoAction::create([
                            'action' => '
                                                محتوایی رو که با کلمه کلیدی <span
                                                    style="color : green">'.$rel.'</span> ساخته بودی با یه
                                                تغییر کوچک در نگارش محتوا
                                                داخل سایت <span style="color : blue">'.$b.'</span> قرار بده
                                                و یه لینک کوتاه از محتوای اصلی سایت بساز و با ذکر
                                                منبع کوتاه کننده لینک آخر محتوا بزار و همچنین یه لینک کوتاه از کلمه
                                                کلیدی <span style="color:blue">'.$key.'</span> بساز و کلمه
                                                کلیدی اصلی محتواتو لینک بده به صفحه <span
                                                    style="color:blue">'.$key.'</span> . :)
                                            ',
                            'baseurl' => $url,
                        ]);
                    }
                }
            }

            foreach(explode("\r\n",$off_seo_->keyword_site) as $key) {
                OffSeoAction::create([
                   'action' => '
                                        محتوایی با کللمه کلیدی <span style="color: green">'.$key.'</span> که
                                        ساخته بودی با یه تغییر کوچک نگارشی داخل سایت <a
                                            href="https://virgool.io">ویرگول</a> بدون هیچ لینکی قرار بده. :)
                                    ',
                   'baseurl' => $url,
                ]);
            }

            foreach(explode("\r\n",$off_seo_->local_site) as $local) {
                OffSeoAction::create([
                    'action' => '
                                        محتوایی با کللمه کلیدی <span style="color: green">' . $local . ' در '.$key. '</span>
                                        که ساخته بودی با یه تغییر کوچک نگارشی داخل سایت <a
                                            href="https://virgool.io">ویرگول</a> بدون هیچ لینکی قرار بده. :)
                                    ',
                    'baseurl' => $url,
                ]);
            }

            foreach($related_key as $related_val) {
                foreach(explode("\r\n",$related_val->related_site) as $rel) {
                    OffSeoAction::create([
                        'action' => '
                                            محتوایی با کللمه کلیدی <span style="color: green">'.$rel.'</span> که
                                            ساخته بودی با یه تغییر کوچک نگارشی داخل سایت <a
                                                href="https://virgool.io">ویرگول</a> بدون هیچ لینکی قرار بده. :)
                                        ',
                        'baseurl' => $url,
                    ]);
                }
            }

            foreach($profileLink as $pl) {
                OffSeoAction::create([
                    'action' => '
                                        برو داخل سایت <a href="'.$pl.'">'.$pl.'</a> طبق راهنما یک پروفایل درست کنو آدرس
                                        سایت خودتو قرار بده.
                                    ',
                    'baseurl' => $url,
                ]);
            }

            foreach($social as $so) {
                OffSeoAction::create([
                    'action' => '
                                        برو داخل <a href="'.$so.'">'.$so.'</a> یه حساب کاربری به اسم <span
                                            style="color: red">'.$siteTitle.'</span> بساز. :)
                                    ',
                    'baseurl' => $url,
                ]);
            }

            foreach(explode("\r\n",$off_seo_->keyword_site) as $offseo) {
                OffSeoAction::create([
                    'action' => '
                                        یه محتوا با موضوع <span style="color: green">'.$offseo.'</span> بنویس و به عنوان
                                        ریپورتاژ در یکی از سایت های خبری منتشر کن و یه لینک با کلمه کلیدی <span
                                            style="color: green">'.$offseo.'</span> به صفحه <span
                                            style="color: green">'.$offseo.'</span> بده. :)
                                    ',
                    'baseurl' => $url,
                ]);
            }
        }

        $off_seo_action = OffSeoAction::latest()->paginate(5);

        return view('off_seo.off-seo-index', compact('url', 'sites', 'off_seo', 'off_seo_', 'siteTitle', 'related_key','off_seo_action'));
    }
}
