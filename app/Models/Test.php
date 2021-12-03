<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Test extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'test';
}
