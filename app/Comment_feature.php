<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment_feature extends Model
{
    protected $table = 'comment_feature';
    protected $fillable = ['id', 'cf_id', 'title', 'author', 'time_post', 'comment'];
}
