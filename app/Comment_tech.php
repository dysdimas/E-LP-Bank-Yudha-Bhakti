<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment_tech extends Model
{
    protected $table = 'comment_tech';
    protected $fillable = ['id', 'ct_id', 'title', 'author', 'time_post', 'comment'];
}
