<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ophot extends Model
{
    protected $table = 'ophot';
    protected $fillable = ['tipe', 'image', 'image2', 'image3', 'image4', 'id', 'title', 'description', 'description2', 'description3', 'updated_at', 'subtitle'];
}
