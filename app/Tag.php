<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Tag model
class Tag extends Model
{
    //
    public function posts() {
      return $this->belongsToMany('Post');
    }
}
