<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Award;

class ShowawardController extends Controller
{
    public function index()
    {
        $award = Award::paginate(2);
        return view('pages.award',[
            'awards' => $award
        ]);
    }
}
