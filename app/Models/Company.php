<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'logo',
        'email',
        'phone',
        'fax',
        'address',
        'wilaya',
        'industry_id',
        'legal_statut_id',
        'rcommerce',
        "nif",
        'user_id',
        'statut',
        'primary_contact_id',

    ];
    
    public function primaryContact()
    {
        return $this->belongsTo(Contact::class,"primary_contact_id");
    }
    
    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }
    
    public function legalStatut()
    {
        return $this->belongsTo(LegalStatut::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
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
