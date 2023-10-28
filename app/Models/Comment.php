<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [
        'comment_text',
        'user_id',
        'parent_comment_id',
    ];


    public function register()
    {
        return $this->belongsTo(Register::class);
    }

    public function children()
    {
        return $this->hasMany(Comment::class, 'parent_comment_id');
    }
}
