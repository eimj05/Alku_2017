<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */

    public function intereses()
    {
        return $this->belongsToMany('App\Intereses1','cliente_intereses1','cliente_id', 'intereses1_id');
    }


    public function roles()
    {
        return $this->belongsToMany('App\Roles1','cliente_roles1','cliente_id', 'roles1_id');
    }

    public function hasAnyRole($roles)
    {
        if (is_array($roles)){
            foreach ($roles as $role) {
                if ($this->hasRole($role)){
                    return true;
                }
            }
        } else{
                if ($this->hasRole($roles)){
                    return true;
                }
            }
            return false;
        }

    public function hasRole($role)
    {
        if ($this->roles()->where('tipoRol', $role)->first()){
            return true;
        }
        return false;
    }

    protected $table = 'users';

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
    protected $fillable = ['name', 'direccion', 'telefono', 'email', 'password','rfc'];
}
