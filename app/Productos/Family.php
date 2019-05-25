<?php

namespace App\Productos;

use Illuminate\Database\Eloquent\Model;
use App\Helper_Functions\getClassHelper;



class Family extends Model
{
    //
    use getClassHelper;

    protected $table='families';

    public function products($id)
    {
      // dd($this->tableGetter($catId));
      $class=$this->classGetter($id);
      $new=new $class();


      return $this->hasMany($new ,'family_id');
    }


      // code...
}
