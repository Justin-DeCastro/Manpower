<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_category',
        'job_name',
        'full_name',
        'email',
        'address',
        'resume',
        'phone',
    ];
}
