<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newupdate;
use App\Http\Requests\NewupdateRequest;

class NewupdateController extends Controller
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
        $newupdates = Newupdate::all(); //ดึงข้อมูลตำแหน่งทั้งหมดจากตาราง newupdate เก็บไว้ที่ตัวแปร
            return view('backend.newupdate.index',[
                'newupdates' => $newupdates
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.newupdate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newupdates = new Newupdate();
        $newupdates->text = $request->text;
        $newupdates->save();

        return redirect()->action('NewupdateController@index');
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
        $newupdates = Newupdate::findOrFail($id);
        return view('backend.newupdate.edit',[
            'newupdates' => $newupdates
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
        $newupdates = Newupdate::find($id);
        $newupdates->update($request->all());

        return redirect()->action('NewupdateController@index')
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newupdates = Newupdate::find($id);
        $newupdates->delete();
        return redirect()->action('NewupdateController@index');
    }
}
