<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opfeature extends Model
{
    protected $table = 'opfeature';
    protected $fillable = ['image', 'image2', 'image3', 'id', 'title', 'description', 'time', 'subtitle'];
}
