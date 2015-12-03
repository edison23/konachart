<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animu extends Model
{
    protected $fillable = [
    	'season_id',
    	'title',
    	'studio',
    	'description',
    	'release_date',
    	'image',
    	'slug'
    ];

    protected $dates = ['release_date'];

    public function season()
    {
    	return $this->belongsTo('App\Season');
    }
}
