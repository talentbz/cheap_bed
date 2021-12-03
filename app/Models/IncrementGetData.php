<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class IncrementGetData extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'increment';
}
