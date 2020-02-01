<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cooperative;
use App\Http\Requests\CooperativeRequest;
use Intervention\Image\Facades\Image;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CooperativeController extends Controller
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
        $cooperatives = Cooperative::paginate(5);
        return view('backend.cooperative.index',[
            'cooperatives'=> $cooperatives
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cooperatives = Cooperative::all(['id', 'name']);
        return view('backend.cooperative.create',[
            'cooperatives' => $cooperatives
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
            'image' => 'required|mimes:jpeg,jpg,png',
            'file' => 'required|mimes:doc,docx,pdf,xls'
        ]);

        //เพิ่มรูป
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        //เพิ่มไฟล์
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('files'), $fileName);

        $form_data = array(
            'name' => $request->name,
            'text' => $request->text,
            'image' => $new_name,
            'file' => $fileName
        );

        Cooperative::create($form_data);

        return redirect('bcooperative')->with('success', 'เพิ่มข้อมูลสหกิจศึกษาสำเร็จ');
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
        $cooperatives = Cooperative::findOrFail($id);
        return view('backend.cooperative.edit', compact('cooperatives'));
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

        $fileName = $request->hidden_file;
        $file = $request->file('file');

        if($image != '')
        {
            $request->validate([
                'name' => 'required',
                'text' => 'required',
                'image' => 'required|mimes:jpeg,jpg,png',
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        elseif($file != '')
        {
            $request->validate([
                'name' => 'required',
                'text' => 'required',
                'file' => 'required|mimes:doc,docx,pdf,xls'
            ]);

            $fileName = $file->getClientOriginalName();
            $file->move(public_path('files'), $fileName);
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
            'image' => $image_name,
            'file' => $fileName
        );

        Cooperative::whereId($id)->update($form_data);
        return redirect('bcooperative')->with('success', 'แก้ไขข้อมูลสหกิจศึกษาสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cooperatives = Cooperative::find($id);
        if ($cooperatives->image != 'nopic.png') {
            File::delete(public_path() . '\\images\\' . $cooperatives->image);
            File::delete(public_path() . '\\images\\resize\\' . $cooperatives->image);
        }
        File::delete(public_path() . '\\files\\' . $cooperatives->file);
        $cooperatives->delete();
        return redirect('bcooperative')->with('success', 'ลบข้อมูลสหกิจศึกษาสำเร็จ');
    }
}
