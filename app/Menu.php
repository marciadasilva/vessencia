<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
  protected $fillable = [
    'name',
    'image',
    'user_id',
    'description',
  ];
}
