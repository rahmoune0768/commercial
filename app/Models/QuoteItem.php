<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'quote_id',
        'product_id',
        'description',
        'quantity',
        'unit_price',
        'tax',
        'subtotal',
        'discount',
        'total',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
    public function calculateSubtotal()
    {
        $this->subtotal = ($this->unit_price * $this->quantity);
        $this->save();
    }
    public function calculateTotal()
    {
        $this->total = ($this->subtotal + ($this->subtotal * $this->tax / 100)) - $this->discount;
        $this->save();
    }
}
