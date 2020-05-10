<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class submenus extends Model
{
    public function facilitys()
    {
        return $this->belongsTo('App\submenu_facility', 'id', 'submenu_id');
    }
}
