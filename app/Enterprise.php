<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    protected $table = 'enterprises';

    protected $fillable = [
        'name', 'email', 'deleted',
    ];
}
