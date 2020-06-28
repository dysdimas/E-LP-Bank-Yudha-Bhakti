<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment_branch extends Model
{
    protected $table = 'comment_branch';
    protected $fillable = ['id', 'cb_id', 'cabang', 'author', 'time_post', 'comment'];
}
