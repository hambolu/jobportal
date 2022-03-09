<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    use HasFactory;

    protected $fillable = [
        'q1',
        'q2',
        'q3',
        'q4',
        'q5',
        'user_id'
    ];
}
