<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
  public function club()
  {
    return $this->belongsTo('App\Club');
  }

  public function board_members()
  {
    return $this->hasMany('App\BoardMember');
  }
}
