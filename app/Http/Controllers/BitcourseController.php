<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bitcourse;
use App\Http\Requests\BitcourseRequest;

class BitcourseController extends Controller
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
        $bitcourses = Bitcourse::paginate(5);
        return view('backend.bitcourse.index',[
            'bitcourses'=> $bitcourses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.bitcourse.create');
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

        Bitcourse::create($form_data);

        return redirect('bbitcourse')->with('success', 'เพิ่มข้อมูลหลักสูตรสำเร็จ');
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
        $bitcourse = Bitcourse::findOrFail($id);
        return view('backend.bitcourse.edit', compact('bitcourse'));
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

        Bitcourse::whereId($id)->update($form_data);
        return redirect('bbitcourse')->with('success', 'แก้ไขข้อมูลหลักสูตรสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bitcourse = Bitcourse::find($id);

        $bitcourse->delete();
        return redirect('bbitcourse')->with('success', 'ลบข้อมูลหลักสูตรสำเร็จ');
    }
}
