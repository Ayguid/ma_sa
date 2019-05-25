<?php

namespace App\Http\Controllers;

use App\Master_Category;


class LandingController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }


    public function index()
    {   $categories=Master_Category::all();
        return view('welcome')->with('categories', $categories);
    }

    public function showFamilies($catId)
    {
      $families = Master_Category::find($catId)->getFamilies;
      return view('catalogue.families')->with('families', $families);
    }




}
