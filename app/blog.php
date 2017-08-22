<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentTaggable\Taggable;
use Carbon\Carbon;

class blog extends Model
{
    use Taggable;
    
    protected $table ='blogs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'image',
    ];

    protected $dates = ['published_at'];

    public function setPublishedAtAttribute($date){

    	$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
      
    }

    public function scopePublished($query)
    {
    	$query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query)
    {
    	$query->where('published_at', '>', Carbon::now());
    }

    public function user(){

      return $this->belongsTo('App\User');

   	}

    public function getCreatedAtAttribute($date)
    {
        return $this->asDateTime($date)->toFormattedDateString();
    }

    public function comment(){

        return $this->hasMany('App\blogcomment');
    
    }

}
