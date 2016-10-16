<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
  protected $hidden = ['id', 'created_at', 'updated_at', 'board_id', 'name_id'];

  public function name()
  {
    return $this->MorphOne('App\Name', 'owner');
  }

  public function board_member()
  {
    return $this->hasOne('App\BoardMember');
  }
}
