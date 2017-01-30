<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursos1 extends Model
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

    protected $table = 'cursos1s';

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
    protected $fillable = ['nombreCurso', 'descripcion', 'fechaInicio', 'fechaFin', 'horaInicio', 'horaFin', 'costo', 'capacitador', 'cupoLimite', 'imagen', 'interes', 'created_by'];
}
