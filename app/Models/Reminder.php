<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'reminder_date',
        'is_completed',
        'user_id',
        'reminderable_id',
        'reminderable_type',
    ];
     // Relationship with User
     public function user()
     {
         return $this->belongsTo(User::class);
     }
 
     // Polymorphic relationship
     public function reminderable()
     {
         return $this->morphTo();
     }
}
