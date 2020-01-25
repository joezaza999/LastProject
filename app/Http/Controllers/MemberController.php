<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Position;
use App\Http\Requests\MembersRequest;
use Intervention\Image\Facades\Image;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class MemberController extends Controller
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
        // $members = Member::with('position')->orderBy('id','desc')->paginate(5);
        // return view('backend.member.index',[
        //     'members'=> $members
        // ]);

        $members = Member::with('position')->orderBy('position_id','desc')->paginate(5);
        return view('backend.member.index',[
            'members'=> $members
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $position = Position::all(['id', 'name']);
        return view('backend.member.create',[
            'positions' => $position
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
        // $members = new Member();
        // $members->name = $request->name;
        // $members->position_id = $request->position_id;
        // if ($request->hasFile('image')) {
        //     $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
        //     $request->file('image')->move(public_path() . '/images/', $filename);
        //     Image::make(public_path() . '/images/' . $filename)->resize(50,50)->save(public_path() . '/images/resize/' . $filename);
        //     $members->image = $filename;
        // }
        // else {
        //     $members->image = 'nopic.png';
        // }
        // $members->save();
        // return redirect()->action('MemberController@index');

        $request->validate([
            'name' => 'required',
            'position_id' => 'required',
            'image' => 'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'name' => $request->name,
            'position_id' => $request->position_id,
            'image' => $new_name
        );

        Member::create($form_data);

        return redirect('bmembers')->with('success', 'เพิ่มบุคลากรสำเร็จ');
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
        $positions = Position::all(['id', 'name']);
        $members = Member::findOrFail($id);
        return view('backend.member.edit', compact('members','positions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MembersRequest $request, $id)
    {
        // $members = Member::find($id);
        // $members->name = $request->name;
        // $members->position_id = $request->position_id;
        // if ($request->hasFile('image')) {
        //     $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
        //     $request->file('image')->move(public_path() . '/images/', $filename);
        //     Image::make(public_path() . '/images/' . $filename)->resize(50,50)->save(public_path() . '/images/resize/' . $filename);
        //     $members->image = $filename;
        // }
        // else {
        //     $members->image = 'nopic.png';
        // }
        // $members->save();

        // return redirect()->action('MemberController@index');

        $image_name = $request->hidden_image;
        $image = $request->file('image');

        if($image != '')
        {
            $request->validate([
                'name' => 'required',
                'position_id' => 'required',
                'image' => 'required|image|max:2048'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validated([
                'name' => 'required',
                'position_id' => 'required',
            ]);
        }

        $form_data = array(
            'name' => $request->name,
            'position_id' => $request->position_id,
            'image' => $image_name
        );

        Member::whereId($id)->update($form_data);
        return redirect('bmembers')->with('success', 'แก้ไขข้อมูลบุคลากรสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $members = Member::find($id);
        if ($members->image != 'nopic.png') {
            File::delete(public_path() . '\\images\\' . $members->image);
            File::delete(public_path() . '\\images\\resize\\' . $members->image);
        }
        $members->delete();
        return redirect('bmembers')->with('success', 'ลบข้อมูลบุคลากรสำเร็จ');
    }
}
