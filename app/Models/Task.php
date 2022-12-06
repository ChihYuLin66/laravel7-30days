<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

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
