<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsupdate;

class ShownewsupdateController extends Controller
{
    public function index()
    {
        $newsupdate = Newsupdate::paginate(2);
        return view('pages.newsupdate',[
            'newsupdates' => $newsupdate
        ]);
    }
}
