<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mitcourse;
use App\Http\Requests\MitcourseRequest;

class MitcourseController extends Controller
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
        $mitcourses = Mitcourse::paginate(5);
        return view('backend.mitcourse.index',[
            'mitcourses'=> $mitcourses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.mitcourse.create');
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

        Mitcourse::create($form_data);

        return redirect('bmitcourse')->with('success', 'เพิ่มข้อมูลหลักสูตรสำเร็จ');
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
        $mitcourse = Mitcourse::findOrFail($id);
        return view('backend.mitcourse.edit', compact('mitcourse'));
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

        Mitcourse::whereId($id)->update($form_data);
        return redirect('bmitcourse')->with('success', 'แก้ไขข้อมูลหลักสูตรสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mitcourse = Mitcourse::find($id);

        $mitcourse->delete();
        return redirect('bmitcourse')->with('success', 'ลบข้อมูลหลักสูตรสำเร็จ');
    }
}
