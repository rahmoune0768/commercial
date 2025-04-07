<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'user_id',
        'quote_id',
        'invoice_number',
        'invoice_date',
        'due_date',
        'status',
        'uuid',
        'subtotal',
        'tax',
        'total',
        'amount_paid',
        'balance_due',
        'notes',
    ];
public function company()
{
    return $this->belongsTo(Company::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}

public function quote()
{
    return $this->belongsTo(Quote::class);
}

public function invoiceItems()
{
    return $this->hasMany(InvoiceItem::class);
}
public function tasks()
{
    return $this->morphMany(Task::class, 'taskable');
}

// Recalculate the entire invoice
/* public function recalculateInvoice()
{
    // Calculate values first
    $subtotal = $this->calculateSubtotal();
    $itemsReduction = $this->calculateItemsReduction();
    $tax = $this->calculateTax();
    $total = $this->calculateTotal($subtotal, $itemsReduction, $tax);
    $balanceDue = $this->calculateBalanceDue($total);

    // Update the invoice only once (better performance)
    $this->update([
        'subtotal' => $subtotal,
        'items_reduction' => $itemsReduction,
        'tax' => $tax,
        'total' => $total,
        'balance_due' => $balanceDue,
    ]);
}
 */
/* // Calculate subtotal (sum of all items before tax)
public function calculateSubtotal()
{
    return $this->invoiceItems()->sum('subtotal'); 
}

// Calculate total discount from all items
public function calculateItemsReduction()
{
    return $this->invoiceItems()->sum('discount');
}

// Calculate total tax for the invoice
public function calculateTax()
{
    return $this->invoiceItems()->sum(function ($item) {
        return ($item->subtotal * $item->tax / 100) - $item->discount;
    });
}

// Calculate total amount (subtotal + tax - discount)
public function calculateTotal($subtotal, $itemsReduction, $tax)
{
    return $subtotal + $tax - $itemsReduction;
}

// Calculate balance due (total - amount paid)
public function calculateBalanceDue($total)
{
    return $total - $this->amount_paid;
} */
public function documents()
{
    return $this->morphMany(Document::class, 'documentable');
}

}