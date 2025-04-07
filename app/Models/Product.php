<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'type',
        'sku',
        'tax',
        'category_id',
        'description',
        'sku',
        'price'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function isService()
    {
        return $this->type === 'service';
    }
    public function isProduct()
    {
        return $this->type === 'product';
    }
}
