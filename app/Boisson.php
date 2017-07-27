<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
    public $timestamps = false;
    
    public function Contenances()
    {        
        return $this->belongsToMany('App\Contenance');
    }
}
