<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intereses1 extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */

    public function clientes()
    {
        return $this->belongsToMany('App\Cliente','cliente_intereses1','intereses1_id', 'cliente_id');
    }

    public function cursos()
    {
        return $this->belongsTo('App\Cursos1');
    }

     public function diplomados()
        {
        return $this->belongsTo('App\Diplomados1');
    }


    protected $table = 'intereses1s';

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
    protected $fillable = ['tipoInteres', 'descripcion'];
}
