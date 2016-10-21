<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
  protected $hidden = ['id', 'created_at', 'updated_at', 'post_id', 'content_id'];

  public function post()
  {
    return $this->belongsTo('App\Post');
  }
  public function content()
  {
      return $this->morphTo();
  }
}
