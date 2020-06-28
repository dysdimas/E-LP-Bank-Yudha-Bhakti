<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opmfbod extends Model
{
    protected $table = 'opmfbod';
    protected $fillable = ['id', 'name', 'image', 'mfbod_message', 'updated_at'];
}
