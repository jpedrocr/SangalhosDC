<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
  protected $hidden = ['id', 'created_at', 'updated_at', 'name_id', 'club_id', 'colaboration_type'];

  public function club()
  {
    return $this->belongsTo('App\Club');
  }

  public function name()
  {
    return $this->MorphOne('App\Name', 'owner');
  }
}
