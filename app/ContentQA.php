<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentQA extends Model
{
  protected $table = 'content_qas';

  protected $hidden = ['id', 'created_at', 'updated_at'];

  public function element()
  {
    return $this->MorphOne('App\Element', 'content');
  }
}
