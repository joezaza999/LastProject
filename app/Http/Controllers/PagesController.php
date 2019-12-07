<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
       
        return view('pages.home');
    }
    public function member(){
       
        return view('pages.member');
    }
    public function course(){
       
        return view('pages.course');
    }
    public function tact(){
       
        return view('pages.tact');
    }
    public function test(){
       
        return view('pages.test');
    }
}
