<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cooperative;
use App\Http\Requests\CooperativeRequest;
use Intervention\Image\Facades\Image;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CooperativeController extends Controller
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
        $cooperatives = Cooperative::all(); //ดึงข้อมูลตำแหน่งทั้งหมดจากตาราง cooperative เก็บไว้ที่ตัวแปร
            return view('backend.cooperative.index',[
                'cooperatives' => $cooperatives
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.cooperative.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cooperatives = new Cooperative();
        $cooperatives->id = $request->id;
        $cooperatives->name = $request->name;
        $cooperatives->text = $request->text;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename)->resize(50,50)->save(public_path() . '/images/resize/' . $filename);
            $cooperatives->image = $filename;
        }
        else {
            $cooperatives->image = 'nopic.png';
        }
        $cooperatives->save();
        return redirect()->action('CooperativeController@index');
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
        $cooperatives = Cooperative::findOrFail($id);
        return view('backend.cooperative.edit',[
            'cooperatives' => $cooperatives
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
        $cooperatives = Cooperative::find($id);
        $cooperatives->update($request->all());

        return redirect()->action('CooperativeController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cooperatives = Cooperative::find($id);
        if ($cooperatives->image != 'nopic.png') {
            File::delete(public_path() . '\\images\\' . $cooperatives->image);
            File::delete(public_path() . '\\images\\resize\\' . $cooperatives->image);
        }
        $cooperatives->delete();
        return redirect()->action('CooperativeController@index');
    }
}
