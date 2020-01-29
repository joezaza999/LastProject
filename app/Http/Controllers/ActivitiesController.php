<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activities;
use App\Http\Requests\ActivitiesRequest;
use Intervention\Image\Facades\Image;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ActivitiesController extends Controller
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
        $activitiess = Activities::paginate(5);
        return view('backend.activities.index',[
            'activitiess'=> $activitiess
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activities = Activities::all(['id', 'title']);
        return view('backend.activities.create',[
            'activitiess' => $activities        
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
        // $activitiess = new Activities();
        // $activitiess->id = $request->id;
        // $activitiess->title = $request->title;
        // $activitiess->content = $request->content;
        // if ($request->hasFile('image')) {
        //     $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
        //     $request->file('image')->move(public_path() . '/images/', $filename);
        //     Image::make(public_path() . '/images/' . $filename)->resize(50,50)->save(public_path() . '/images/resize/' . $filename);
        //     $activitiess->image = $filename;
        // }
        // else {
        //     $activitiess->image = 'nopic.png';
        // }
        // $activitiess->save();
        // return redirect()->action('ActivitiesController@index');
        
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'title' => $request->title,
            'content' => $request->content,
            'image' => $new_name
        );

        Activities::create($form_data);

        return redirect('bactivities')->with('success', 'เพิ่มข้อมูลกิจกรรมสำเร็จ');
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
        $activities = Activities::findOrFail($id);
        return view('backend.activities.edit', compact('activities'));
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
        // $activitiess = Activities::find($id);
        // $activitiess->update($request->all());

        // return redirect()->action('ActivitiesController@index');
       
        $image_name = $request->hidden_image;
        $image = $request->file('image');

        if($image != '')
        {
            $request->validate([
                'title' => 'required',
                'content' => 'required',
                'image' => 'required|image|max:2048'
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
            'image' => $image_name
        );

        Activities::whereId($id)->update($form_data);
        return redirect('bactivities')->with('success', 'แก้ไขข้อมูลกิจกรรมสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activitiess = Activities::find($id);
        if ($activitiess->image != 'nopic.png') {
            File::delete(public_path() . '\\images\\' . $activitiess->image);
            File::delete(public_path() . '\\images\\resize\\' . $activitiess->image);
        }
        $activitiess->delete();
        return redirect('bactivities')->with('success', 'ลบข้อมูลกิจกรรมสำเร็จ');
    }
}
