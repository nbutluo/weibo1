<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';
    protected $fillable = ['content'];

    // 指定一条微博属于哪位用户
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
