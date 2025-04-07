<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'user_id',
        'quote_number',
        'quote_date',
        'expiry_date',
        'status',
        'uuid',
        'subtotal',
        'tax',
        'discount',
        'total',
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
    
    public function quoteItems()
    {
        return $this->hasMany(QuoteItem::class);
    }
    public function tasks()
{
    return $this->morphMany(Task::class, 'taskable');
}
public function documents()
{
    return $this->morphMany(Document::class, 'documentable');
}

}
