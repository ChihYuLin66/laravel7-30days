<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

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

    /**
    * 會員基本資料
    *
    * @return Illuminate\Database\Eloquent\Model UserProfile
    */
    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    /**
    * 關聯 Task
    *
    * @return Illuminate\Database\Eloquent\Model Task
    */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }


}
