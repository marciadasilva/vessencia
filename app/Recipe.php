<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
      'title',
      'subtitle',
      'ingredients',
      'instructions',
      'video',
      'image',
      'category_id',
      'time_preparation',
      'yield',
    ];

    public function category(){
      return $this->belongsTo(Category::class);
    }
}
