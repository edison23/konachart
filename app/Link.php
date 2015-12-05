<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
    'animu_id',
    'site',
    'url'
    ];

    protected $timestamps = false;

    public function animu()
    {
        return $this->belongsTo('App\Animu');
    }

    // public function site()
    // {
    //     return $this->belongsTo('App\LinkedSite', 'id', 'site_id');
    // }
}
