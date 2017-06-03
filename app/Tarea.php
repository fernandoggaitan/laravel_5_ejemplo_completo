<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    
	public function usuario()
    {
    	return $this->belongsTo('App\User');
    }

    public function estado()
    {
    	return $this->belongsTo('App\Estado');
    }
    
}
