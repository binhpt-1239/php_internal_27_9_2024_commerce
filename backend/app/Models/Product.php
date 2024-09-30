<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

     protected $fillable = [
        'name',
        'type_id',
        'price',
        'description',
        'img',
        'overall_rating',
        'rating_avg',
    ];

    // Define the relationship with the Type model
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
    
     public function productInstances()
    {
        return $this->hasMany(ProductInstance::class, 'product_id');
    }
}
