<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Belong extends Model
{
    protected $table = 'belongs';

    protected $fillable = [
        'student_id', 'enterprise_id', 'deleted',
    ];
}
