<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Comment model
class Comment extends Model
{
    //
    public function post() {
      return $this->belongsTo('Post');
    }

    public $timestamps = false;
}
