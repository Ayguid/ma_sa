<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{

  // protected $fillable = [
  // ];

    public function children()
    {
      return $this->hasMany($this,'parent_id');
    }

    public function getSubCategories()
    {
      return $this->children()->with('getSubCategories');
    }


    public function products()
    {
      return $this->hasMany(Product::class);
    }





}
