<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
     protected $fillable = [
         'room_no', 'day', 'time_slot', 'teacher_id', 'semester_id', 
    ];

    public function teacher(){
    	
    	return belongsTo('App\teacher');
    }
}
