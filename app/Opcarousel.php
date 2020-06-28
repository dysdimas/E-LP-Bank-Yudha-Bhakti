<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opcarousel extends Model
{
    protected $table = 'opcarousel';
    protected $fillable = ['id', 'image', 'updated_at'];
}
