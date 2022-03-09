<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobapplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'jobtitle',
        'jobyears',
        'jobpay',
        'user_id'
    ];
}
