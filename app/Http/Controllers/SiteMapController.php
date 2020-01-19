<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SitemapController extends Controller
{
    // 画面表示
    public function html()
    {
        return view('sitemap');
    }

    // sitemap.xmlの生成と表示
    public function xml()
    {
        $sitemap = \App::make("sitemap");
        $now = Carbon::now();
        $sitemap->add(url('/'), $now, '1.0', 'daily');
        $sitemap->store('xml', 'sitemap');

        return $sitemap->render('xml');
    }
}