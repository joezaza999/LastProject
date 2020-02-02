<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use App\Http\Requests\FormRequest;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class FormController extends Controller
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
        $forms = Form::paginate(5);
        return view('backend.form.index',[
            'forms'=> $forms
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $forms = Form::all(['id', 'name']);
        return view('backend.form.create',[
            'forms' => $forms
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
            'file' => 'required|mimes:doc,docx,pdf,xls'
        ]);

        //เพิ่มไฟล์
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('files'), $fileName);

        $form_data = array(
            'name' => $request->name,
            'file' => $fileName
        );

        Form::create($form_data);

        return redirect('bform')->with('success', 'เพิ่มข้อมูลแบบฟอร์มสำเร็จ');
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
        $forms = Form::findOrFail($id);
        return view('backend.form.edit', compact('forms'));
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
        $fileName = $request->hidden_file;
        $file = $request->file('file');

            $request->validate([
                'name' => 'required',
            ]);
 
            $request->validate([
                'name' => 'required',
                'file' => 'required|mimes:doc,docx,pdf,xls'
            ]);

            $fileName = $file->getClientOriginalName();
            $file->move(public_path('files'), $fileName);
      
            $request->validate([
                'name' => 'required',
            ]);

        $form_data = array(
            'name' => $request->name,
            'file' => $fileName
        );

        Form::whereId($id)->update($form_data);
        return redirect('bform')->with('success', 'แก้ไขข้อมูลแบบฟอร์มสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forms = Form::find($id);

        File::delete(public_path() . '\\files\\' . $forms->file);
        $forms->delete();
        return redirect('bform')->with('success', 'ลบข้อมูลแบบฟอร์มสำเร็จ');
    }
}
