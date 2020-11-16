<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    protected $table = 'studies';

    protected $fillable = [
        'student_id', 'cycle_id', 'deleted',
    ];
}
