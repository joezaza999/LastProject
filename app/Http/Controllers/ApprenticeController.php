<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apprentice;
use App\Http\Requests\ApprenticeRequest;
use Intervention\Image\Facades\Image;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ApprenticeController extends Controller
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
        $apprentices = Apprentice::paginate(5);
        return view('backend.apprentice.index',[
            'apprentices'=> $apprentices
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apprentices = Apprentice::all(['id', 'name']);
        return view('backend.apprentice.create',[
            'apprentices' => $apprentices      
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

        Apprentice::create($form_data);

        return redirect('bapprentice')->with('success', 'เพิ่มข้อมูลฝึกงานสำเร็จ');
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
        $apprentices = Apprentice::findOrFail($id);
        return view('backend.apprentice.edit', compact('apprentices'));
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

        Apprentice::whereId($id)->update($form_data);
        return redirect('bapprentice')->with('success', 'แก้ไขข้อมูลฝึกงานสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apprentices = Apprentice::find($id);
        if ($apprentices->image != 'nopic.png') {
            File::delete(public_path() . '\\images\\' . $apprentices->image);
            File::delete(public_path() . '\\images\\resize\\' . $apprentices->image);
        }
        $apprentices->delete();
        return redirect('bapprentice')->with('success', 'ลบข้อมูลฝึกงานสำเร็จ');
    }
}