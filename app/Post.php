<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $hidden = ['id', 'created_at', 'updated_at', 'pivot', 'category_id'];

  public function category()
  {
    return $this->belongsTo('App\Category');
  }
  public function pages()
  {
    return $this->belongsToMany('App\Page')->withTimestamps();
  }
  public function elements()
  {
    return $this->hasMany('App\Element');
  }
  public function element()
  {
    return $this->MorphOne('App\Element', 'content');
  }
}
