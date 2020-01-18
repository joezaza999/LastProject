<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fund;
use App\Http\Requests\FundRequest;
use Intervention\Image\Facades\Image;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class FundController extends Controller
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
        {
            $funds = Fund::all(); //ดึงข้อมูลตำแหน่งทั้งหมดจากตาราง Fund เก็บไว้ที่ตัวแปร
            return view('backend.fund.index',[
                'funds' => $funds
            ]);
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.fund.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $funds = new Fund();
        $funds->id = $request->id;
        $funds->title = $request->title;
        $funds->content = $request->content;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/images/', $filename);
            Image::make(public_path() . '/images/' . $filename)->resize(50,50)->save(public_path() . '/images/resize/' . $filename);
            $funds->image = $filename;
        }
        else {
            $funds->image = 'nopic.png';
        }
        $funds->save();
        return redirect()->action('FundController@index');
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
        $funds = Fund::findOrFail($id);
        return view('backend.fund.edit',[
            'funds'=> $funds
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
        $funds = Fund::find($id);
        $funds->update($request->all());

        return redirect()->action('FundController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $funds = Fund::find($id);
        if ($funds->image != 'nopic.png') {
            File::delete(public_path() . '\\images\\' . $funds->image);
            File::delete(public_path() . '\\images\\resize\\' . $funds->image);
        }
        $funds->delete();
        return redirect()->action('FundController@index');
    }
}
