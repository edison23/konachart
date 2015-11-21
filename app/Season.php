<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    //
    protected $fillable = [
    	'name',
    	'published',
    	'slug'
    ];

    public function scopePublished($query)
    {
    	$query->where('published', '==', 1);
    }

    public function animus()
    {
    	return $this->hasMany('App\Animu');
    }
}
