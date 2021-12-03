<?php

use Illuminate\Support\Str;
// prefix word for file name and id
function str_limit($string, $length) {
    return Str::limit($string, $length, ' ...');
}