<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fund;
use App\Http\Requests\FundRequest;

class FundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $abouts = Fund::all(); //ดึงข้อมูลตำแหน่งทั้งหมดจากตาราง Fund เก็บไว้ที่ตัวแปร
            return view('backend.fund.index',[
                'funds' => $funds
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
        return view('backend.fund.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $funds = new Fund();
        $funds->text = $request->text;
        $funds->save();

        return redirect()->action('FundController@index');
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
        $funds = new Fund();
        $funds->text = $request->text;
        $funds->save();

        return redirect()->action('FundController@index');
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
        $funds = Fund::find($id);
        $funds->update($request->all());

        return redirect()->action('FundController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $funds = Fund::find($id);
        $funds->delete();
        return redirect()->action('FundController@index');
    }
}
