<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpvideosDpp extends Model
{
    protected $table = 'opvideosdpp';
    protected $fillable = ['url', 'title', 'image', 'id', 'updated_at'];
}
