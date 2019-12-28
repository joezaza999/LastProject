<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use App\Http\Requests\PositionRequest;

class PositionController extends Controller
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
        $positions = Position::all(); //ดึงข้อมูลตำแหน่งทั้งหมดจากตาราง position เก็บไว้ที่ตัวแปร
        return view('backend.position.index',[
            'positions' => $positions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.position.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PositionRequest $request)
    {
        $positions = new Position();
        $positions->name = $request->name;
        $positions->save();

        return redirect()->action('PositionController@index');
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
        $positions = Position::findOrFail($id);
        return view('backend.position.edit',[
            'positions' => $positions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PositionRequest $request, $id)
    {
        $positions = Position::find($id);
        $positions->update($request->all());

        return redirect()->action('PositionController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $positions = Position::find($id);
        $positions->delete();
        return redirect()->action('PositionController@index');
    }
}
