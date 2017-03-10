<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiplomadoInscripcion extends Model
{

    protected $table = 'cliente_diplomados1';

    protected $fillable = ['cliente_id','diplomados1_id'];

}
