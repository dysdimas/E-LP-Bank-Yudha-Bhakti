<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creditpp extends Model
{
    protected $table = 'creditpp';
    protected $fillable = ['id', 'title', 'url', 'updated_at'];
}
