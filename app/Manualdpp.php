<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manualdpp extends Model
{
    protected $table = 'manualdpp';
    protected $fillable = ['id', 'title', 'filename', 'updated_at'];
}
