<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slideshow;

class ShowhomeController extends Controller
{
    public function index(){
        $slideshow = Slideshow::all();
        return view('pages.home',[
            'slideshows' => $slideshow
        ]);
    }
}
