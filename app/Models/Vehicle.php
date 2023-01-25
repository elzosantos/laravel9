<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand_id', 
        'fipe_id'
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'update_at' => 'datetime',
    ];
}
