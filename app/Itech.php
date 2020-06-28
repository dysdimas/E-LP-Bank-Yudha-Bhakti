<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itech extends Model
{
    protected $table = 'itech';
    protected $fillable = ['id', 'description', 'title', 'image', 'updated_at'];
}
