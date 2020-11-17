<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worksheet extends Model
{
    protected $table = 'worksheets';

    public function alumno()
    {
        return $this->belongsTo('App\User');
    }

    protected $fillable = [
        'date', 'description', 'student_id', 'accepted', 'deleted',
    ];
}
