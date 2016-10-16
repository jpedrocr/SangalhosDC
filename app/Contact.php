<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $hidden = ['id', 'created_at', 'updated_at', 'club_id'];

  public function club()
  {
    return $this->belongsTo('App\Club');
  }

  public function contact_details()
  {
    return $this->hasMany('App\ContactDetail');
  }
}
