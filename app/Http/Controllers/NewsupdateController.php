<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsupdate;
use App\Http\Requests\NewsupdateRequest;
use Intervention\Image\Facades\Image;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class NewsupdateController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsupdates = Newsupdate::all(); //ดึงข้อมูลตำแหน่งทั้งหมดจากตาราง newsupdate เก็บไว้ที่ตัวแปร
            return view('backend.newsupdate.index',[
                'newsupdates' => $newsupdates
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.newsupdate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newsupdates = new Newsupdate();
        $newsupdates->id = $request->id;
        $newsupdates->title = $request->title;
        $newsupdates->content = $request->content;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename)->resize(50,50)->save(public_path() . '/images/resize/' . $filename);
            $newsupdates->image = $filename;
        }
        else {
            $newsupdates->image = 'nopic.png';
        }
        $newsupdates->save();
        return redirect()->action('NewsupdateController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newsupdates = Newsupdate::findOrFail($id);
        return view('backend.newsupdate.edit',[
            'newsupdates' => $newsupdates
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newsupdates = Newsupdate::find($id);
        $newsupdates->update($request->all());

        return redirect()->action('NewsupdateController@index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsupdates = Newsupdate::find($id);
        if ($newsupdates->image != 'nopic.png') {
            File::delete(public_path() . '\\images\\' . $newsupdates->image);
            File::delete(public_path() . '\\images\\resize\\' . $newsupdates->image);
        }
        $newsupdates->delete();
        return redirect()->action('NewsupdateController@index');
    }
}
