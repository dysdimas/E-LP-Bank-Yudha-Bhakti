<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicepp extends Model
{
    protected $table = 'servicepp';
    protected $fillable = ['id', 'title', 'url', 'updated_at'];
}
