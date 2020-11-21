<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    protected $table = 'assistances';

    protected $fillable = [
        'student_id', 'date', 'assistance', 'accepted', 'deleted',
    ];

    public function alumno()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}
