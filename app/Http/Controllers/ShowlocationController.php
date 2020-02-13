<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cooperative;
use App\Apprentice;

class ShowlocationController extends Controller
{
    public function index()
    {
        $cooperative = Cooperative::all();
        $apprentices = Apprentice::all();
        return view('pages.location',[
            'cooperatives' => $cooperative,
            'apprentices'=> $apprentices
        ]);
    }
}
