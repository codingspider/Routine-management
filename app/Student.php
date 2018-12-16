<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
         'name', 'user_id', 'semster_id'
    ];
}



