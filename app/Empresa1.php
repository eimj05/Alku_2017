<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa1 extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'empresa1s';

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
    protected $fillable = ['nombreEmpresa', 'descripcion', 'contrasena', 'fechaRegistro', 'rfc', 'idRol_fk'];
}
