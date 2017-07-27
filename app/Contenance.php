<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenance extends Model
{
    public $timestamps = false;
    
    public function boissons()
    {        
        return $this->belongsToMany('App\Boisson');
    }
}
