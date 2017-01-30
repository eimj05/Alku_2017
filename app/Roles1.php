<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles1 extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */

      public function clientes()
    {
        return $this->belongsToMany('App\Cliente','cliente_roles1','roles1_id', 'cliente_id');
    }


    protected $table = 'roles1s';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipoRol', 'descripcion'];
}
