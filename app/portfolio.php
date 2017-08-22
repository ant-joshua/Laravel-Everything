<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{	

	protected $table ='portfolios';

	 protected $fillable = [
        'title', 'image',
    ];

    protected $dates = ['published_at'];

    public function user(){

      return $this->belongsTo('App\User');

   	}
}
