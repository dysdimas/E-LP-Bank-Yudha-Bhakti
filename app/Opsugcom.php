<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opsugcom extends Model
{
    protected $table = 'sugcom';
    protected $fillable = ['id', 'nik', 'name', 'message', 'time_post'];
}
