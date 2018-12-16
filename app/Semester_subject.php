<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester_subject extends Model
{
    protected $fillable = [
         'subject_id', 'semester_id', 
    ];
}
