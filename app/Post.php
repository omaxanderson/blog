<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Post model
class Post extends Model
{

  public function user() {
    return $this->belongsTo('User');
  }

  public function comments() {
    return $this->hasMany('Comment');
  }

  public function tags() {
    return $this->belongsToMany('Tag');
  }
}
