<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $table = 'visits';

    protected $fillable = [
        'tracing_id', 'enterprise_id', 'date', 'kms', 'accepted', 'deleted',
    ];
}
