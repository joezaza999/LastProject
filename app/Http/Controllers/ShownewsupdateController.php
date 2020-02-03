<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsupdate;

class ShownewsupdateController extends Controller
{
    public function index()
    {
        $newsupdate = Newsupdate::paginate(9);
        return view('pages.newsupdate',[
            'newsupdates' => $newsupdate
        ]);
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $newsupdate = Newsupdate::findOrFail($id);
        return view('pages.readnewsupdate', compact('newsupdate'));
    }
}
