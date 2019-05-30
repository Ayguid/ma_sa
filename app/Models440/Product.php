<?php

namespace App\Models440;

use Illuminate\Database\Eloquent\Model;


use App\Helper_Functions\getClassHelper;


class Product extends Model
{
    //
    use getClassHelper;

    protected $table='products';




    public function details($id)
    {
      $class=$this->classGetter($id);
      $new=new $class();
      return $this->hasOne($new, 'id', 'child_id')->first();
    }




}
