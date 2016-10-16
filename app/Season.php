<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
  public function teams()
  {
    return $this->hasMany('App\Team');
  }
}
