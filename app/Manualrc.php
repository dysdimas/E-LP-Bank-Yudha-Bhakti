<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manualrc extends Model
{
    protected $table = 'manualrc';
    protected $fillable = ['id', 'title', 'filename', 'updated_at'];
}
