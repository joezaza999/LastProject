<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slideshow;
use App\Activities;
use App\About;
use App\Newsupdate;


class ShowhomeController extends Controller
{
    public function index(){
        $slideshow = Slideshow::orderBy('updated_at','desc')->get();
        $activities = Activities::orderBy('updated_at','desc')->limit(6)->get();
        $about = About::all();
        $newsupdate = Newsupdate::orderBy('updated_at','desc')->limit(6)->get();

        return view('pages.home',[
            'slideshows' => $slideshow,
            'activities' => $activities,
            'abouts' => $about,
            'newsupdate' => $newsupdate
        ]);
    }
}
