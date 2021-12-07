<?php

namespace App\Models\Mongo;

use Jenssegers\Mongodb\Eloquent\Model;

class IncrementGetData extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'increment';
}
