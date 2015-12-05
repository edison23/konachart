<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkedSite extends Model
{
    protected $fillable = [
        'name',
        'icon'
    ];

    public $timestamps = false;

    protected $table = 'linkedSites';

}
