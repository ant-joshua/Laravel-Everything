<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $table ='sliders';

	protected $fillable = [
        'title', 'content', 'image',
    ];

    protected $dates = ['published_at'];

    public function user(){

      return $this->belongsTo('App\User');

   	}
}
