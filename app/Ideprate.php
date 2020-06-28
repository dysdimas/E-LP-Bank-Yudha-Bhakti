<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ideprate extends Model
{
    protected $table = 'ideprate';
    protected $fillable = ['id', 'description', 'onem', 'twom', 'threem'];
}
