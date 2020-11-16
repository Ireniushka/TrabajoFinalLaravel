<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    protected $table = 'assistances';

    protected $fillable = [
        'student_id', 'date', 'assistance', 'accepted', 'deleted',
    ];
}
