<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'user_id', 'title'
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
