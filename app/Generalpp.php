<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generalpp extends Model
{
    protected $table = 'generalpp';
    protected $fillable = ['id', 'title', 'url', 'updated_at'];
}
