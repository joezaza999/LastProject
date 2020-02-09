<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subgroup;


class ShowcategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $subgroup = Subgroup::all();
        return view('pages.category',[
            'categorys' => $category,
            'subgroups'=> $subgroup
        ]);
    }
}
