<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topping extends Model
{
    use HasFactory;

     protected $fillable = [
        'name',
        'price',
    ];

    // Define relationship with ProductTopping (if needed)
    public function productToppings()
    {
        return $this->hasMany(ProductTopping::class, 'topping_id');
    }
}
