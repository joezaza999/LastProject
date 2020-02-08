<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() 
    {
        $users = DB::table('users')->get();
        return view('backend.bhome', [
            'users' => $users
        ]);
    }

    public function status(Request $request, $id)
    {
        $data = User::find($id);

        if($data->status == 0){
            $data->status = 1;
        }else{
            $data->status = 0;
        }

        $data->save();

        return Redirect::to('bhome')->with('message' , $data->name .'Status has been chang successfull.');
    }
}
