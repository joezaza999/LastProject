<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coursegenaral;
use App\Http\Requests\CoursegenaralRequest;

class CoursegenaralController extends Controller
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
        $coursegenarals = Coursegenaral::paginate(5);
        return view('backend.coursegenaral.index',[
            'coursegenarals'=> $coursegenarals
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.coursegenaral.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);
    
        $form_data = array(
            'text' => $request->text
        );

        Coursegenaral::create($form_data);

        return redirect('bcoursegenaral')->with('success', 'เพิ่มข้อมูลหลักสูตรทั่วไปสำเร็จ');
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
        $coursegenaral = Coursegenaral::findOrFail($id);
        return view('backend.coursegenaral.edit', compact('coursegenaral'));
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
        $request->validate([
            'text' => 'required'
        ]);

         $form_data = array(
             'text' => $request->text
        );

        Coursegenaral::whereId($id)->update($form_data);
        return redirect('bcoursegenaral')->with('success', 'แก้ไขข้อมูลหลักสูตรทั่วไปสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coursegenarals = Coursegenaral::find($id);

        $coursegenarals->delete();
        return redirect('bcoursegenaral')->with('success', 'ลบข้อมูลหลักสูตรทั่วไปสำเร็จ');
    }
}
