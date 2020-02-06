<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subgroup;
use App\Http\Requests\SubgroupRequest;

class SubgroupController extends Controller
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
        $subgroups = Subgroup::paginate(5);
        return view('backend.subgroup.index',[
            'subgroups'=> $subgroups
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.subgroup.create');
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
            'name' => 'required',
            'credit' => 'required'
        ]);
    
        $form_data = array(
            'name' => $request->name,
            'credit' => $request->credit
        );

        Subgroup::create($form_data);

        return redirect('bsubgroup')->with('success', 'เพิ่มข้อมูลกลุ่มวิชาสำเร็จ');
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
        $subgroup = Subgroup::findOrFail($id);
        return view('backend.subgroup.edit', compact('subgroup'));
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
            'name' => 'required',
            'credit' => 'required'
        ]);

        $form_data = array(
            'name' => $request->name,
            'credit' => $request->credit,
        );

    Subgroup::whereId($id)->update($form_data);
    return redirect('bsubgroup')->with('success', 'แก้ไขข้อมูลกลุ่มวิชาสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subgroups = Subgroup::find($id);

        $subgroups->delete();
        return redirect('bsubgroup')->with('success', 'ลบข้อมูลกลุ่มวิชาสำเร็จ');
    }
}
