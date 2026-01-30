<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Important!
use Illuminate\Notifications\Notifiable;

class InfoCustomer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'info_customer'; // explicitly define table name

    protected $fillable = [
        'username',
        'email',
        'password',
        'profile',
        'avatar',
        'gmail_id',
        'facebook_id',
        'provider',
        'provider_id',
        'email_verified_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
