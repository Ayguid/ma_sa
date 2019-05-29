<?php

namespace App\Models440;

use Illuminate\Database\Eloquent\Model;
// use App\Productos\Cilindro;
// use App\Productos\Valvula;
// use App\Productos\Estacion_De_Valvula;
// use App\Productos\Valvula_Auxiliar;
// use App\Productos\Equipo_Para_Vacio;
// use App\Productos\Manipulacion_Y_Equipo;
// use App\Productos\Unidad_FRL;
// use App\Productos\Conexion;
// use App\Productos\Proceso;
// use App\Productos\Automatizacion_Y_Control;

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


    // public function getAttr(){
    //
    // }


}
