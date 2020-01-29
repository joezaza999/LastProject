<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Http\Requests\CourseRequest;

class CourseController extends Controller
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
        $courses = Course::paginate(5);
        return view('backend.course.index',[
            'courses'=> $courses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = Course::all(['id', 'namethai']);
        return view('backend.course.create',[
            'courses' => $course     
            ]);
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
            'namethai' => 'required',
            'nameeng' => 'required',
            'group' => 'required',
            'credit' => 'required',
            'format' => 'required',
            'property' => 'required',
            'job' => 'required'
        ]);

        $form_data = array(
            'namethai' => $request->namethai,
            'nameeng' => $request->nameeng,
            'group' => $request->group,
            'credit' => $request->credit,
            'format' => $request->format,
            'property' => $request->property,
            'job' => $request->job
        );

        Course::create($form_data);

        return redirect('bcourse')->with('success', 'เพิ่มข้อมูลหลักสูตรสำเร็จ');
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
        $course = Course::findOrFail($id);
        return view('backend.course.edit', compact('course'));
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
            'namethai' => 'required',
            'nameeng' => 'required',
            'group' => 'required',
            'credit' => 'required',
            'format' => 'required',
             'property' => 'required',
            'job' => 'required'
        ]);

        $form_data = array(
            'namethai' => $request->namethai,
            'nameeng' => $request->nameeng,
            'group' => $request->group,
            'credit' => $request->credit,
            'format' => $request->format,
            'property' => $request->property,
            'job' => $request->job
        );

        Course::whereId($id)->update($form_data);
        return redirect('bcourse')->with('success', 'แก้ไขข้อมูลหลักสูตรสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courses = Course::find($id);
        $courses->delete();
        return redirect('bcourse')->with('success', 'ลบข้อมูลหลักสูตรสำเร็จ');
    }
}
