<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'invoice_id',
        'product_instance_id',
        'size',
        'topping',
        'price_topping',
        'price_of_product',
        'quantity',
        'total',
    ];

    // Define relationships
    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'invoice_id');
    }

    public function product()
    {
        return $this->belongsTo(ProductInstance::class, 'product_id');
    }
}
