<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Ubicacion extends Eloquent{

	public function cursos()
    {
        return $this->belongsToMany('App\Cursos1','curso_ubicacion1','ubicacion_id', 'curso_id');
    }

		protected $fillable = ['title','lat','lng'];

		

	}

 
 ?>