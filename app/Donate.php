<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
	protected $fillable = ['amount'];
   public function organization()
    {
        return $this->belongsTo('App\Organization');
    }

}
