<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at' => 'date',
    ];

    protected $fillable = [
        'name',
        'age',
    ];
}
