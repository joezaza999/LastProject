<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsupdate;
use App\Http\Requests\NewsupdateRequest;
use Intervention\Image\Facades\Image;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class NewsupdateController extends Controller
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
        $newsupdates = Newsupdate::paginate(5);
        return view('backend.newsupdate.index',[
            'newsupdates'=> $newsupdates
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newsupdate = Newsupdate::all(['id', 'title']);
        return view('backend.newsupdate.create',[
            'newsupdates' => $newsupdate   
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
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|max:2048',
            'date' => 'required'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'title' => $request->title,
            'content' => $request->content,
            'image' => $new_name,
            'date' => $request->date
        );

        Newsupdate::create($form_data);

        return redirect('bnewsupdate')->with('success', 'เพิ่มข้อมูลประชาสัมพันธ์สำเร็จ');
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
        $newsupdate = Newsupdate::findOrFail($id);
        return view('backend.newsupdate.edit', compact('newsupdate'));
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
                'title' => 'required',
                'content' => 'required',
                'image' => 'required|image|max:2048',
                'date' => 'required'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'title' => 'required',
                'content' => 'required',
            ]);
        }

        $form_data = array(
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image_name,
            'date' => $request->date
        );

        Newsupdate::whereId($id)->update($form_data);
        return redirect('bnewsupdate')->with('success', 'แก้ไขข้อมูลประชาสัมพันธ์สำเร็จ');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsupdates = Newsupdate::find($id);
        if ($newsupdates->image != 'nopic.png') {
            File::delete(public_path() . '\\images\\' . $newsupdates->image);
            File::delete(public_path() . '\\images\\resize\\' . $newsupdates->image);
        }
        $newsupdates->delete();
        return redirect('bnewsupdate')->with('success', 'ลบข้อมูลประชาสัมพันธ์สำเร็จ');
    }
}
