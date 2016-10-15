<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
  public function name()
  {
    return $this->MorphOne('App\Name', 'owner');
  }

  public function contacts()
  {
    return $this->hasMany('App\Contact');
  }

  public function schedules()
  {
    return $this->hasMany('App\Schedule');
  }

  public function location()
  {
    return $this->hasOne('App\Location');
  }
}
