<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
   public function donates()
  {
    return $this->hasMany('App\Donate');
  }
}
