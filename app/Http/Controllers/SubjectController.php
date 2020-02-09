<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Subgroup;
use App\Http\Requests\SubjectRequest;
use illuminate\Support\Str;

class SubjectController extends Controller
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
        $subjects = Subject::with('subgroup')->orderBy('subgroup_id','desc')->paginate(5);
        return view('backend.subject.index',[
            'subjects'=> $subjects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subgroup = Subgroup::all(['id', 'name']);
        return view('backend.subject.create',[
            'subgroups' => $subgroup
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
            'subcode' => 'required',
            'name' => 'required',
            'credit' => 'required',
            'subgroup_id' => 'required',
            'text' => 'required'
        ]);
    
        $form_data = array(
            'subcode' => $request->subcode,
            'name' => $request->name,
            'credit' => $request->credit,
            'subgroup_id' => $request->subgroup_id,
            'text' => $request->text
        );

        Subject::create($form_data);

        return redirect('bsubject')->with('success', 'เพิ่มข้อมูลวิชาสำเร็จ');
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
        $subgroups = Subgroup::all(['id', 'name']);
        $subject = Subject::findOrFail($id);
        return view('backend.subject.edit', compact('subgroups','subject'));
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
            'subcode' => 'required',
            'name' => 'required',
            'credit' => 'required',
            'subgroup_id' => 'required',
            'text' => 'required'
        ]);

        $form_data = array(
            'subcode' => $request->subcode,
            'name' => $request->name,
            'credit' => $request->credit,
            'subgroup_id' => $request->subgroup_id,
            'text' => $request->text
        );

    Subject::whereId($id)->update($form_data);
    return redirect('bsubject')->with('success', 'แก้ไขข้อมูลวิชาสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subjects = Subject::find($id);

        $subjects->delete();
        return redirect('bsubject')->with('success', 'ลบข้อมูลวิชาสำเร็จ');
    }
}
