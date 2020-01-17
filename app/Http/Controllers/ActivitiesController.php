<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activities;
use App\Http\Requests\ActivitiesRequest;
use Intervention\Image\Facades\Image;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ActivitiesController extends Controller
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
        $activitiess = Activities::all(); //ดึงข้อมูลตำแหน่งทั้งหมดจากตาราง activities เก็บไว้ที่ตัวแปร
        return view('backend.activities.index',[
            'activitiess' => $activitiess
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $activitiess = new Activities();
        $activitiess->id = $request->id;
        $activitiess->title = $request->title;
        $activitiess->content = $request->content;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename)->resize(50,50)->save(public_path() . '/images/resize/' . $filename);
            $activitiess->image = $filename;
        }
        else {
            $activitiess->image = 'nopic.png';
        }
        $activitiess->save();
        return redirect()->action('ActivitiesController@index');
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
        $activitiess = Activities::findOrFail($id);
        return view('backend.activities.edit',[
            'activitiess' => $activitiess
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
        $activitiess = Activities::find($id);
        $activitiess->update($request->all());

        return redirect()->action('ActivitiesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activitiess = Activities::find($id);
        if ($activitiess->image != 'nopic.png') {
            File::delete(public_path() . '\\images\\' . $activitiess->image);
            File::delete(public_path() . '\\images\\resize\\' . $activitiess->image);
        }
        $activitiess->delete();
        return redirect()->action('ActivitiesController@index');
    }
}
