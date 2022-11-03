<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        return $this->belongsTo(
            "App\Models\User",
            "users_id",
            "id"
        );
    }

    public function comments(){
        return $this->hasMany(
            "App\Models\Comment",
            "posts_id",
            "id"
        );
    }

    use HasFactory;
}
