<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riskcompp extends Model
{
    protected $table = 'riskcompp';
    protected $fillable = ['id', 'title', 'url', 'updated_at'];
}
