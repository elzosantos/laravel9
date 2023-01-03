<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }

    public function getBrandsCars($search)    
    {
      
        $brands = $this->where( function($query) use ($search){
            if($search){
                $query->where('name', 'LIKE', "%{$search}%"); 
            }
        })
        ->with('vehicles')
        ->paginate(2);
        return $brands;

    }
}
