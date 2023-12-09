<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $primaryKey = 'id';
    protected $fillable = [
        'username',
        'email',
        'password',
        'active',
        'role',
        'provider',
        'provider_id',
        'access_token',
        'refresh_token',
        'access_token_expires_at',
        'avatar',
    ];
    
    public function shoppingCart()
    {
        return $this->hasOne(Cart::class, 'IdUser', 'id');
    }
    public function purchaseOrders(){
        return $this->hasMany(PurchaseOrder::class, 'IdUser', 'id');
    }
    public function InfoUsers(){
        return $this->hasMany(InfoUser::class, 'IdUser', 'id');
    }
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
}
