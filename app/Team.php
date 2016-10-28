<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
  protected $hidden = ['id', 'created_at', 'updated_at', 'name_id', 'season_id'];

  public function name()
  {
    return $this->MorphOne('App\Name', 'owner');
  }
  public function season()
  {
    return $this->belongsTo('App\Season');
  }
  public function games()
  {
    return $this->hasMany('App\Game');
  }
}
