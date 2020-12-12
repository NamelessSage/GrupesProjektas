<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'username',
        'vardas',
        'pavarde',
        'email',
        'telefono_nr',
        'gimimo_metai',
        'role',
        'password',
    ];

    use HasFactory, Notifiable;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
    public function isAdmin() {
        return $this->role == 'admin';
    }
    public function isUser() {
        return $this->role == 'user';
    }
    public function isKlientas() {
        return $this->role == 'klientas';
    }
    public function carts()
    {
        return $this->hasMany(Cart::class, 'user_id');
    }
    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }
    public function assignCart()
    {
        $carts = $this->carts;
        $cart = $carts->where('paid', '=', '0')->first();
        if(is_null($cart)) {
            $cart = Cart::create([
                'user_id' => $this->id
            ]);
        }

        return $cart;
    }
}
