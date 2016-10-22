<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
  protected $hidden = ['id', 'created_at', 'updated_at', 'name_id', 'location_id', 'description0', 'description1', 'description2', 'nipc'];

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
    return $this->belongsTo('App\Location');
  }

  public function relevant_events()
  {
    return $this->hasMany('App\RelevantEvent');
  }

  public function boards()
  {
    return $this->hasMany('App\Board');
  }

  public function sponsors()
  {
    return $this->hasMany('App\Entity')->where('colaboration_type', 'sponsorship');
  }

  public function partners()
  {
    return $this->hasMany('App\Entity')->where('colaboration_type', 'partnership');
  }

  public function seasons()
  {
    return $this->hasMany('App\Season');
  }

  public function element()
  {
    return $this->MorphOne('App\Element', 'content');
  }
}
