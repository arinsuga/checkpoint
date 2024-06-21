<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Role extends Model
{

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimeStamps();
    }

    public function app()
    {
        return $this->belongsTo('App\App');
    }

}
