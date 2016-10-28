<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
  protected $hidden = ['id', 'created_at', 'updated_at', 'week_id', 'team_id'];

  public function team()
  {
    return $this->belongsTo('App\Team');
  }
  public function week()
  {
    return $this->belongsTo('App\Week');
  }
}
