<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentTaggable\Taggable;
use Carbon\Carbon;

class forum extends Model
{
    use Taggable;
    
    protected $table ='forums';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content'
    ];

    protected $dates = ['published_at'];

    public function user(){

      return $this->belongsTo('App\User');

    }

    public function comment(){

        return $this->hasMany('App\forumcomment');
    
    }

}
