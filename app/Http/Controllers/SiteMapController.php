<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Roumen\Sitemap\SitemapServiceProvider;
use Carbon\Carbon;


class siteMapController extends Controller
{

  public function sitemap(){
    // create new sitemap object
    $sitemap = \App::make("sitemap");
    $now = Carbon::now();
    // add items to the sitemap (url, date, priority, freq)
    $sitemap->add(\URL::to('/home'), $now, '1.0', 'daily');
    // \URL::to('/home')はweb.phpでトップページに指定したURL　＋ α　をaddメソッドで指定している。

    $sitemap->add(URL::to('/home/event'), $now, '0.9', 'weekly');

    // generate your sitemap (format, filename)
    $sitemap->store('xml', 'sitemap');
    // this will generate file mysitemap.xml to your public folder
    // return $sitemap->render('xml');ならばhttps://トップページ/sitemapにアクセスすれば
    // サイトマップページに飛ぶことが出来る。
  }
}
