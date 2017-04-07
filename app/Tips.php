<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tips extends Model
{
    protected $table = 'tips';

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
    protected $fillable = ['tip', 'tdesc'];

}
