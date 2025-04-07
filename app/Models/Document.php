<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'file_path', 'mime_type', 'size', 'documentable_id', 'documentable_type'];
    public function users()
    {
        return $this->belongsToMany(User::class, 'document_user')->withTimestamps();
    }
    /**
     * Relationship: A document is uploaded by a single user.
     */
    public function uploader()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
    public function documentable()
    {
        return $this->morphTo();
    }
}