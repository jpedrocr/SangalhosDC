<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
  protected $hidden = ['id', 'created_at', 'updated_at'];

  public function teams()
  {
    return $this->hasMany('App\Team');
  }
}
