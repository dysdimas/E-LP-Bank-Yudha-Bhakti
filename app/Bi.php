<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bi extends Model
{
    protected $table = 'bi';
    protected $fillable = ['id', 'title', 'filename', 'updated_at'];
}
