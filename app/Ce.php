<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ce extends Model
{
    protected $table = 'ces';

    protected $fillable = [
        'word', 'description', 'ra_id', 'task_id', 'mark', 'deleted',
    ];
}
