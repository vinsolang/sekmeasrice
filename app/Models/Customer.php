<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'info_customer'; // Custom table name

    protected $fillable = [
        'username',
        'email',
        'password',
        'profile',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Disable Laravel's remember_token behavior
     */
    public function getRememberTokenName()
    {
        return null;
    }

    public function setRememberToken($value)
    {
        // Do nothing
    }
}
