<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment_divisi extends Model
{
    protected $table = 'comment_division';
    protected $fillable = ['id', 'cd_id', 'divisi', 'author', 'time_post', 'comment'];
}
