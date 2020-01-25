<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fund;

class ShowfundController extends Controller
{
    public function index()
    {
        $fund = Fund::paginate(2);
        return view('pages.fund',[
            'funds' => $fund
        ]);
    }
}
