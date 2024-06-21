<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime:d/m/Y',
    ];

    public function apps()
    {
        $ates = config('a1company.dateformat');
        return $this->belongsToMany('App\App');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role')->withTimeStamps();
    }

    public function rolesByAppCode($appCode)
    {
        /**
         * TODO: Buat jadi single query
         * Cara ini membuat query dijalankan 2 kali sehingga membuat
         * performance berkurang.
         * Target: Hilangkan line-code berikut:
         * 
         * $appId = $this->apps->where('code', $appCode)->first();
         * 
         */

        $appId = $this->apps->where('code', $appCode)->first();

        if ($appId) 
        {
            $appId = $appId->id;
        }

        $roles = $this->roles()
                 ->select('code', 'name', 'description')
                 ->where('role_user.app_id', $appId)
                 ->where('role_user.user_id', $this->id)
                 ->get();

        return $roles->makeHidden('pivot');
    }

    public function rolesByAppId($appId)
    {
        return $this
        ->roles()->where('role_user.app_id', $appId)->get();
    }

    public function isMemberOfApp($code)
    {
        return true;
        $app = $this->apps()
        ->where('code', $code)
        ->first();

        if ($app != null) {
            return true;
        }

        return false;
    }

    public function isMemberOfAppAndRole($requestedAppCode, $requestedRoleCode)
    {
        $app = $this->apps()
        ->where('code', $requestedAppCode)
        ->first();

        if ($app != null) {
            $appId = $app->id;
            $role = $this.roles()
            ->where('app_id',$appId)
            ->where('code', $requestedRoleCode)
            ->first();

            if ($role != null) {
                return true;
            }
        }

        return false;
    }

    public function attends()
    {
        return $this->hasMany('Arins\Fo\Models\Attend');
    }

}
