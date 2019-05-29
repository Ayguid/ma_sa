<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models440\Category;
use App\Models440\Product;


class LandingController extends Controller
{

  public function __construct()
  {
    // $this->middleware('auth');
  }


  public function index($id=null)
  {
    $categories=Category::where('parent_id', $id)->get();
    return view('welcome')->with('categories', $categories);
  }


  public function productsByCategory($id)
  {
    $cat=Category::find($id);
    $products=$cat->products();

    $data=[
      'cat'=>$cat,
      'products'=>$products->paginate(5),

    ];

    return view('welcome')->with('data', $data);
  }













}
