<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;


    public function user(){
        return $this->belongsTo(
            "App\Models\User",
            "users_id",
            "id"
        );
    }

    public function post(){
        return $this->belongsTo(
            "App\Models\Post",
            "posts_id",
            "id"
        );
    }
}
