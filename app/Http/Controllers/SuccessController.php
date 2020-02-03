<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Success;
use App\Http\Requests\SuccessRequest;
use Intervention\Image\Facades\Image;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class SuccessController extends Controller
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
        $success = Success::paginate(5);
        return view('backend.success.index',[
            'success'=> $success
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $success = Success::all(['id', 'name']);
        return view('backend.success.create',[
            'success' => $success     
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
            'name' => 'required',
            'text' => 'required',
            'image' => 'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'name' => $request->name,
            'text' => $request->text,
            'image' => $new_name
        );

        Success::create($form_data);

        return redirect('bsuccess')->with('success', 'เพิ่มข้อมูลศิษย์เก่าสำเร็จ');
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
        $success = Success::findOrFail($id);
        return view('backend.success.edit', compact('success'));
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

        if($image != '')
        {
            $request->validate([
                'name' => 'required',
                'text' => 'required',
                'image' => 'required|image|max:2048'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'name' => 'required',
                'text' => 'required',
            ]);
        }

        $form_data = array(
            'name' => $request->name,
            'text' => $request->text,
            'image' => $image_name
        );

        Success::whereId($id)->update($form_data);
        return redirect('bsuccess')->with('success', 'แก้ไขข้อมูลศิษย์เก่าสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $success = Success::find($id);
        if ($success->image != 'nopic.png') {
            File::delete(public_path() . '\\images\\' . $success->image);
            File::delete(public_path() . '\\images\\resize\\' . $success->image);
        }
        $success->delete();
        return redirect('bsuccess')->with('success', 'ลบข้อมูลศิษย์เก่าสำเร็จ');
    }
    
}
