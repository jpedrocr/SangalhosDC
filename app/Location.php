<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  public function club()
  {
    return $this->belongsTo('App\Club');
  }
}
