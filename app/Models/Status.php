<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    // 指定一条微博属于哪位用户
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
