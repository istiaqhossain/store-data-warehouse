<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Property extends Model
{
    use SoftDeletes;

    protected $connection = 'mongodb';
    
    protected $collection = 'stores';

    protected $fillable = [
        'name'
    ];

    protected $dates = ['deleted_at'];

    public function store()
    {
        return $this->embedsOne('App\Store');
    }
}
