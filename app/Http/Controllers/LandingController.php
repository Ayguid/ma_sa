<?php

namespace App\Http\Controllers;

use App\Category;


class LandingController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }


    public function index($id=null)
    {   $categories=Category::where('parent_id', $id)->get();
        return view('welcome')->with('categories', $categories);
    }

    // public function showSubCategories($id)
    // {
    //   $categories=Category::where('parent_id', $id)->get();
    //   return view('welcome')->with('categories', $categories);
    // }





}
