<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

       /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'description',
        'opening_hours',
        'razaoSocial',
        'CNPJ'
    ];
    public function getPartners($search)
    {
        $partners = $this->where( function($query) use ($search){
            if($search){
                $query->where('email', $search);
                $query->orWhere('name', 'LIKE', "%{$search}%");
            }
        })
        ->paginate(3);
        return $partners;

    }
}
