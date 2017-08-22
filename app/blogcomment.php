<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogcomment extends Model
{
    public function user(){

      return $this->belongsTo('App\User');

    }
    public function comment(){

      return $this->belongsTo('App\blog');

    }
    protected $dates = ['published_at'];

}
