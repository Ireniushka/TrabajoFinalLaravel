<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    protected $table = 'cycles';

    protected $fillable = [
        'name', 'grade', 'year', 'deleted',
    ];
}
