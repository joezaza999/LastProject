<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cooperative;
use App\Http\Requests\CooperativeRequest;

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
        $cooperatives = Cooperative::all(); //ดึงข้อมูลตำแหน่งทั้งหมดจากตาราง cooperative เก็บไว้ที่ตัวแปร
            return view('backend.cooperative.index',[
                'cooperatives' => $cooperatives
            ]);
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.cooperative.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cooperatives = new Cooperative();
        $cooperatives->text = $request->text;
        $cooperatives->save();

        return redirect()->action('CooperativeController@index');
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
        return view('backend.cooperative.edit',[
            'cooperatives' => $cooperatives
        ]);
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
        $cooperatives = Cooperative::find($id);
        $cooperatives->update($request->all());

        return redirect()->action('CooperativeController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cooperative = Cooperative::find($id);
        $cooperative->delete();
        return redirect()->action('CooperativeController@index');
    }
}
