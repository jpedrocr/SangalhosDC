<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  protected $hidden = ['id', 'created_at', 'updated_at', 'club_id', 'latitude', 'longitude', 'description'];

  public function club()
  {
    return $this->hasOne('App\Club');
  }
}
