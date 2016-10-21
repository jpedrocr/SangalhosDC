<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
  protected $hidden = ['id', 'created_at', 'updated_at'];

  public function posts()
  {
    return $this->belongsToMany('App\Post')->withTimestamps();
  }
}
