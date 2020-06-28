<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idivision extends Model
{
    protected $table = 'idivision';
    protected $fillable = ['id', 'description', 'divisi', 'title', 'image', 'image2', 'image3', 'updated_at'];
}
