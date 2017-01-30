<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Vendor extends Eloquent{

		protected $fillable = ['title','lat','lng'];
	}
 
 ?>