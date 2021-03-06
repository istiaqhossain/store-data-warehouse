<?php

namespace App;

use App\Property;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

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

    public function properties()
    {
        return $this->embedsMany('App\Property');
    }
}
