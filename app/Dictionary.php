<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    protected $table = 'dictionary';
    protected $fillable = ['id', 'title', 'image', 'description', 'updated_at'];
}
