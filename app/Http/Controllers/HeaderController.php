<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\Http\Requests\HeaderRequest;
use Intervention\Image\Facades\Image;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;




class HeaderController extends Controller
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
        $header = Header::all();
        return view('backend.header.index',[
            'headers' => $header
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $header = Header::all();
        return view('backend.header.create',[
            'headers' => $header        
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
            'image' => 'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);


        $form_data = array(
            'image' => $new_name
        );

        Header::create($form_data);
        return redirect('bheader')->with('success', 'เพิ่มข้อมูลส่วนบนของเว็บสำเร็จ');
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
        $header = Header::findOrFail($id);
        return view('backend.header.edit', compact('header'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
           
        $request->validate([
                'image' => 'required|image|max:2048'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
           
            $form_data = array(
                'image' => $image_name
            );

        Header::whereId($id)->update($form_data);
        return redirect('bheader')->with('success', 'แก้ไขข้อมูลส่วนบนของเว็บสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $header = Header::find($id);
        File::delete(public_path() . '\\images\\' . $header->image);
        File::delete(public_path() . '\\images\\resize\\' . $header->image);

        $header->delete();
        return redirect()->action('HeaderController@index');
    }
}
