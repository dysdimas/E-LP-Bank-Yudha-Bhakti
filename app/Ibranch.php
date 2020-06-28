<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ibranch extends Model
{
    protected $table = 'ibranch';
    protected $fillable = ['id', 'description', 'cabang', 'title', 'image', 'updated_at'];
}
