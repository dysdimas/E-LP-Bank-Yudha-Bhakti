<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usermenu extends Model
{
    protected $table = 'User_menu';
    protected $fillable = ['id', 'menu', 'url', 'updated_at', 'secure', 'class'];
}
