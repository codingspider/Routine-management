<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    
    protected $fillable = [
         'name', 'user_id', 
    ];
    public function routine(){
    	return $this->hasMany('App\Routine'); 
    }
}
