<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Isbdk extends Model
{
    protected $table = 'isbdk';
    protected $fillable = ['id', 'segmen', 'sbdk'];
}
