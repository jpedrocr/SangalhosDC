<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
  public function club()
  {
    return $this->belongsTo('App\Club');
  }
}
