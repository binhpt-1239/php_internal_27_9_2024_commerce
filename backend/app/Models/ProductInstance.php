<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInstance extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
    ];

    // Define relationship with Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // Define relationship with ProductTopping
    public function productToppings()
    {
        return $this->hasMany(ProductTopping::class, 'product_instance_id');
    }
}
