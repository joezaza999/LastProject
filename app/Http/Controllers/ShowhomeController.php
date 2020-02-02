<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slideshow;
use App\Activities;
use App\About;

class ShowhomeController extends Controller
{
    public function index(){
        $slideshow = Slideshow::orderBy('updated_at','desc')->get();
        $activities = Activities::orderBy('updated_at','desc')->limit(6)->get();
        $about = About::all();
        return view('pages.home',[
            'slideshows' => $slideshow,
            'activities' => $activities,
            'abouts' => $about
        ]);
    }
}
