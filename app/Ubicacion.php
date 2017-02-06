<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Ubicacion extends Eloquent{

	public function cursos()
    {
        return $this->belongsToMany('App\Cursos1','curso_ubicacion1','ubicacion_id', 'curso_id');
    }

    public function diplomados()
    {
        return $this->belongsToMany('App\Diplomados1','diplomado_ubicacion1','ubicacion_id', 'diplomado_id');
    }

    public function convocatorias()
    {
        return $this->belongsToMany('App\Convocatoria1','convocatoria_ubicacion1','ubicacion_id', 'convocatoria_id');
    }

		protected $fillable = ['title','lat','lng','created_by'];

		

	}

 
 ?>