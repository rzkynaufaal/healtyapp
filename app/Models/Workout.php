<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    protected $table = 'workout';

    protected $fillable = [
        'name',
        'user_id',
        'date',
        'Duration',
        'exercises',
        'sets',
        'reps',
        'weight',
        'notes',
    ];

    function user()  {
        return $this->belongsTo(User::class,'user_id');
    }
}
