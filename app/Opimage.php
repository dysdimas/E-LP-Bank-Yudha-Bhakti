<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opimage extends Model
{
    protected $table = 'opimage';
    protected $fillable = ['filename', 'id', 'updated_at'];
}
