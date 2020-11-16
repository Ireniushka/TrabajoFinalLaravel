<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracing extends Model
{
    protected $table = 'tracings';

    protected $fillable = [
        'type', 'reason', 'observation', 'tutor_c_id', 'deleted',
    ];
}
