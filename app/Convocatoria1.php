<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convocatoria1 extends Model
{

    public function ubicacion()
    {
        return $this->belongsToMany('App\Ubicacion','convocatoria_ubicacion1','convocatoria_id', 'ubicacion_id');
    }
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
    protected $fillable = ['nombreConvocatoria', 'descripcionCorta','descripcion', 'tipoConvocatoria', 'dependencia', 'fechaCierre', 'imagen', 'interes','monto','contacto', 'created_by'];
}
