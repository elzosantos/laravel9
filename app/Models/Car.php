<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'status',
        'year',
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
