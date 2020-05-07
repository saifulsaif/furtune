<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctors extends Model
{
    public function times()
    {
        return $this->belongsTo('App\doctor_time', 'id', 'doctor_id');
    }
}
