<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelevantEvent extends Model
{
  public function club()
  {
    return $this->belongsTo('App\Club');
  }
}
