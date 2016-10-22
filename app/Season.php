<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
  protected $hidden = ['id', 'created_at', 'updated_at', 'club_id'];

  public function teams()
  {
    return $this->hasMany('App\Team');
  }

  public function club()
  {
    return $this->belongsTo('App\Club');
  }
}
