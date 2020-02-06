<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Generation;
use App\Http\Requests\GenerationRequest;

class GenerationController extends Controller
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
        $generations = Generation::all(); //ดึงข้อมูลตำแหน่งทั้งหมดจากตาราง generation เก็บไว้ที่ตัวแปร
        return view('backend.generation.index',[
            'generations' => $generations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.generation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $generations = new Generation();
        $generations->name = $request->name;
        $generations->save();

        return redirect()->action('GenerationController@index');
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
        $generations = Generation::findOrFail($id);
        return view('backend.generation.edit',[
            'generations' => $generations
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
        $generations = Generation::find($id);
        $generations->update($request->all());

        return redirect()->action('GenerationController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $generations = Generation::find($id);
        $generations->delete();
        return redirect()->action('GenerationController@index');
    }
}