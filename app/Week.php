<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
  protected $hidden = ['id', 'created_at', 'updated_at', 'sunday'];

  public function games()
  {
    return $this->hasMany('App\Game');
  }
}
