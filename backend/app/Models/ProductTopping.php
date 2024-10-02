<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTopping extends Model
{
    use HasFactory;

    protected $fillable = [
        'topping_id',
        'product_instance_id',
    ];

    // Relationship with Topping model
    public function topping()
    {
        return $this->belongsTo(Topping::class, 'topping_id');
    }

    // Relationship with Product model
    public function productInstances()
    {
        return $this->belongsTp(ProductInstance::class, 'product_instance_id');
    }
}
