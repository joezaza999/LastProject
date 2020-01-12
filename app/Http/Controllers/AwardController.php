<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Award;
use App\Http\Requests\AwardRequest;

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
        $awards->text = $request->text;
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
    public function update(AwardRequest $request, $id)
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
        $awards->delete();
        return redirect()->action('AwardController@index');
    }
}
