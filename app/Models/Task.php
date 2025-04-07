<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'status',
        'due_date',
    ];
    public function taskable()
    {
        return $this->morphTo();
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'task_user');
    }
    public function documents()
    {
        return $this->morphMany(Document::class, 'documentable');
    }
    
}
