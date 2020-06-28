<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment_hotnews extends Model
{
    protected $table = 'comment_hotnews';
    protected $fillable = ['id', 'ch_id', 'title', 'author', 'time_post', 'comment'];
}
