<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ojk extends Model
{
    protected $table = 'ojk';
    protected $fillable = ['id', 'title', 'filename', 'updated_at'];
}
