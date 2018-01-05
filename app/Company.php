<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $fillable = [
    'about', 'facebook','phone','email', 'twitter', 'address',
    'description', 'instagram',
  ];
}
