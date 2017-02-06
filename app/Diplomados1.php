<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diplomados1 extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    public function interes()
    {
        return $this->hasOne('App\Intereses1');
    }

    public function ubicacion()
    {
        return $this->belongsToMany('App\Ubicacion','diplomado_ubicacion1','diplomado_id', 'ubicacion_id');
    }
    
    protected $table = 'diplomados1s';

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
    protected $fillable = ['nombreDiplomado', 'descripcion', 'fechaInicio', 'fechaFin', 'horaInicio', 'horaFin', 'costo', 'capacitador', 'cupoLimite', 'imagen', 'interes','created_by'];
}
