<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'phone',
        'position',
        'company_id',
        'isprimary',
        
    ];
    
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function isPrimary()
    {
        return $this->isprimary === true;
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
