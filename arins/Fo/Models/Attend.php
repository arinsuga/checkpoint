<?php

namespace Arins\Fo\Models;

use Illuminate\Database\Eloquent\Model;
use Arins\Facades\Formater;

class Attend extends Model
{

    protected $dates = [
        'attend_dt',
        'checkin_time',
        'checkout_time',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function app()
    {
        return $this->belongsTo('App\App');
    }


}
