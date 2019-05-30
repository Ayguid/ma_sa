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
      'models'=>$cat->models()
    ];
    return view('welcome')->with('data', $data);
  }




  public function productsByModel($id,$string)
  {
    $cat=Category::find($id);
    switch ($cat->table_id) {
      case 1:
      $table = 'cilindros';
      break;
      case 2:
      $table = 'valvulas';
      break;
      case 3:
      $table = 'estaciones_de_valvulas';
      break;
      case 4:
      $table = 'valvulas_auxiliares';
      break;
      case 5:
      $table = 'equipos_para_vacio';
      break;
      case 6:
      $table = 'manipulacion_y_equipos';
      break;
      case 7:
      $table = 'unidades_frl';
      break;
      case 8:
      $table = 'conexiones';
      break;
      case 9:
      $table = 'procesos';
      break;
      case 10:
      $table = 'automatizacion_y_control';
      break;
      default:
      dd('error');
      break;
    }

    $products = Product::join($table, $table.'.id','=', 'products.child_id')
        ->where('Modelo','=', $string)->where('products.category_id', $cat->id);


    $data=[
      'cat'=>$cat,
      'products'=>$products->paginate(5),
      'models'=>$cat->models($cat->id)
    ];

    return view('welcome')->with('data', $data);
  }










}
