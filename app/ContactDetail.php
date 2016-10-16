<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactDetail extends Model
{
  protected $hidden = ['id', 'created_at', 'updated_at', 'contact_id'];

  public function contact()
  {
    return $this->belongsTo('App\Contact');
  }
}
