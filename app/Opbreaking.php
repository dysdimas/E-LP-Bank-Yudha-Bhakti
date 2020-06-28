<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opbreaking extends Model
{
    protected $table = 'opbreaking';
    protected $fillable = ['id', 'description', 'link', 'updated_at'];
}
