<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use SoftDeletes;

    protected $connection = 'mongodb';
    
    protected $collection = 'stores';

    protected $fillable = [
        'name',
        'image'
    ];

    protected $dates = ['deleted_at'];
}
