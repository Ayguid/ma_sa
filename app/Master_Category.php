<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Productos\Family;

use App\Helper_Functions\getClassHelper;

class Master_Category extends Model
{
  use getClassHelper;
  // protected $fillable = [
  // ];

  public function products($id)
  {
    $class=$this->classGetter($id);
    $new=new $class();
    return $this->hasMany($new ,'category_id');
    // code...
  }

  public function getFamilies()
  {
    return $this->hasMany(Family::class, 'category_id');
  }


}
