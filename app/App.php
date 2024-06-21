<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class App extends Model
{

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function roles()
    {
        return $this->hasMany('App\Role');
    }

}
