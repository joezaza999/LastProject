<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Http\Requests\AboutRequest;

class AboutController extends Controller
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
        $abouts = About::paginate(5);
        return view('backend.about.index',[
            'abouts'=> $abouts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.create');
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

        About::create($form_data);

        return redirect('babout')->with('success', 'เพิ่มข้อมูลเกี่ยวกับเราสำเร็จ');
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
        $about = About::findOrFail($id);
        return view('backend.about.edit', compact('about'));
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

        About::whereId($id)->update($form_data);
        return redirect('babout')->with('success', 'แก้ไขข้อมูลเกี่ยวกับเราสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abouts = About::find($id);

        $abouts->delete();
        return redirect('babout')->with('success', 'ลบข้อมูลเกี่ยวกับเราสำเร็จ');
    }
}
