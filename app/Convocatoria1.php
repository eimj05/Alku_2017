<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convocatoria1 extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'convocatoria1s';

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
    protected $fillable = ['nombreConvocatoria', 'descripcion', 'tipoConvocatoria', 'dependencia', 'fechaCierre', 'imagen', 'contacto', 'created_by'];
}
