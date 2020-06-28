<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operationalpp extends Model
{
    protected $table = 'operationalpp';
    protected $fillable = ['id', 'title', 'url', 'updated_at'];
}
