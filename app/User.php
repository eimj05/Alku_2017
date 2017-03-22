<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

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
    protected $fillable = [
         'name', 'direccion', 'telefono', 'email', 'rfc', 'password', 'password_updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
