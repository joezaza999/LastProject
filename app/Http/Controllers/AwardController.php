<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Award;
use App\Http\Requests\AwardRequest;
use Intervention\Image\Facades\Image;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class AwardController extends Controller
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
        $awards = Award::all(); //ดึงข้อมูลตำแหน่งทั้งหมดจากตาราง award เก็บไว้ที่ตัวแปร
            return view('backend.award.index',[
                'awards' => $awards
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.award.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $awards = new Award();
        $awards->id = $request->id;
        $awards->title = $request->title;
        $awards->content = $request->content;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename)->resize(50,50)->save(public_path() . '/images/resize/' . $filename);
            $awards->image = $filename;
        }
        else {
            $awards->image = 'nopic.png';
        }
        $awards->save();
        return redirect()->action('AwardController@index');
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
        $awards = Award::findOrFail($id);
        return view('backend.award.edit',[
            'awards' => $awards
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
        $awards = Award::find($id);
        $awards->update($request->all());

        return redirect()->action('AwardController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $awards = Award::find($id);
        if ($awards->image != 'nopic.png') {
            File::delete(public_path() . '\\images\\' . $awards->image);
            File::delete(public_path() . '\\images\\resize\\' . $awards->image);
        }
        $awards->delete();
        return redirect()->action('AwardController@index');
    }
}
