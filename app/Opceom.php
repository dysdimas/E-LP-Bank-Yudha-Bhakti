<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opceom extends Model
{
    protected $table = 'opceom';
    protected $fillable = ['id', 'name', 'title', 'ceom_message', 'updated_at'];
}
