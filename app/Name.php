<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
  protected $hidden = ['id', 'created_at', 'updated_at', 'owner_id', 'owner_type'];

  public function owner()
  {
    return $this->morphTo();
  }
}
