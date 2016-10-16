<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoardMember extends Model
{
  protected $hidden = ['id', 'created_at', 'updated_at', 'board_id', 'person_id'];

  public function board()
  {
    return $this->belongsTo('App\Board');
  }

  public function person()
  {
    return $this->belongsTo('App\Person');
  }
}
