<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
    public $timestamps = false;
    
    public function contenances()
    {        
        return $this->belongsToMany('App\Contenance');
    }
}
