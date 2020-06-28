<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fundingpp extends Model
{
    protected $table = 'fundingpp';
    protected $fillable = ['id', 'title', 'url', 'updated_at'];
}
