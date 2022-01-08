<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles; // add permission


// pertemuak ke 6 untuk fitur email yang benar benar email
// class User extends Authenticatable
class User extends Authenticatable implements MustVerifyEmail
{
    // implementasi packed dari laravel permission
    // use Notifiable;
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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


    public function borrow()
    {
        // relasi many to many User ke Book pertem ke 40
        return $this->belongsToMany(Book::class, 'borrow_history')
                    ->withTimestamps();
    }
}
