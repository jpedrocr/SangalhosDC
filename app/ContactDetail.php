<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactDetail extends Model
{
  public function contact()
  {
    return $this->belongsTo('App\Contact');
  }
}
