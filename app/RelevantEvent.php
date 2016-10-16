<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelevantEvent extends Model
{
  protected $hidden = ['id', 'created_at', 'updated_at', 'club_id'];

  public function club()
  {
    return $this->belongsTo('App\Club');
  }
}
