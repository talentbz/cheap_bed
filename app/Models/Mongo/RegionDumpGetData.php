<?php

namespace App\Models\Mongo;

use Jenssegers\Mongodb\Eloquent\Model;

class RegionDumpGetData extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'region';
}
