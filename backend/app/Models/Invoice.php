<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'epl_id',
        'cus_id',
        'is_online',
        'voucher',
        'total',
        'name',
        'phone',
        'email',
        'payment_method',
        'status',
        'address',
        'note',
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'cus_id');
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(User::class, 'epl_id');
    }

    public function invoiceDetails()
    {
        return $this->hasMany(InvoiceDetail::class, 'invoice_id');
    }
}
