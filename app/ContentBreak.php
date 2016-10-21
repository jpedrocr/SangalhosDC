<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentBreak extends Model
{
  protected $hidden = ['id', 'created_at', 'updated_at'];

  public function element()
  {
    return $this->MorphOne('App\Element', 'content');
  }
}
