<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studentyear;
use App\Http\Requests\StudentyearRequest;

class StudentyearController extends Controller
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
        $studentyears = Studentyear::all(); //ดึงข้อมูลตำแหน่งทั้งหมดจากตาราง studentyear เก็บไว้ที่ตัวแปร
        return view('backend.studentyear.index',[
            'studentyears' => $studentyears
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.studentyear.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studentyear = new Studentyear();
        $studentyear->name = $request->name;
        $studentyear->save();

        return redirect()->action('StudentyearController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studentyears = Studentyear::findOrFail($id);
        return view('backend.studentyear.edit',[
            'studentyears' => $studentyears
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
        $studentyears = Studentyear::find($id);
        $studentyears->update($request->all());

        return redirect()->action('StudentyearController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studentyears = Studentyear::find($id);
        $studentyears->delete();
        return redirect()->action('StudentyearController@index');
    }
}
