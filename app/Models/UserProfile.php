<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'gender', 'birthday', 'address',
    ];

    protected $dates = [
        'birthday'
    ];

    /**
     * 關聯會員
     * 
     * @return Illuminate\Database\Eloquent\Model User
     */
    public function user()
    {
        return $this->belongesTo(User::class);
    }

}
