<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'email', 'username', 'password',
        'profile_photo', 'paypal', 'phone', 'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Get the followers of this account
     */
    public function followers()
    {
        return $this->belongsToMany(User::class, 'followers', 'user_id', 'user_id_follower');
    }

    /**
     * Get the following of this account
     */
    public function followings()
    {
        return $this->belongsToMany(User::class, 'followers', 'user_id_follower', 'user_id');
    }

    /**
     * Get the Pet binded
     */
    public function pet()
    {
        return $this->hasOne(Pet::class);
    }

    /**
     * Get the Company binded
     */
    public function company()
    {
        return $this->hasOne(Company::class);
    }
}
