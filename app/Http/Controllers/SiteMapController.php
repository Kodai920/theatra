<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Photo;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;

class SiteMapController extends Controller
{
    public function sitemap(){
        $sitemap = App::make("sitemap");
        $now = Carbon::now();
        $sitemap->add(URL::to('/'), $now, '1.0', 'always');
        $sitemap->add(URL::to('/photos/create'), '2018-10-28', '1.0', 'monthly');

        $photos = Photo::orderBy('updated_at', 'desc')->get();
        foreach ($photos as $photo)
        {
            $sitemap->add(URL::to('/photos/' . $photo->id), $photo->updated_at, '0.8', 'yearly');
        }

        return $sitemap->render('xml');
    }
}
