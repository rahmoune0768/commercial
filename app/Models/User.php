<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'position',
        'phone',
        'profile_photo',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    /**
     * Get the role associated with the user.
     */
    public function role()
    {
        return $this->hasOne(Role::class);
    }
    /**
     * Determine if the user is an administrator.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->role->name === 'admin';
    }
    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'task_user');
    }
    public function companies()
    {
        return $this->hasMany(Company::class);
    }
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }       
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
    public function documents()
    {
        return $this->belongsToMany(Document::class, 'document_user');
    }

}
