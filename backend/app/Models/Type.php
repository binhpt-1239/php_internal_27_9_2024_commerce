<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Define the relationship with the Product model (if needed)
    public function products()
    {
        return $this->hasMany(Product::class, 'type_id');
    }
}
