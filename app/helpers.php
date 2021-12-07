<?php

use Illuminate\Support\Str;
// prefix word for file name and id
function str_limit($string, $length) {
    return Str::limit($string, $length, ' ...');
}

function getHotelID($check_in_date, $check_out_date, $adult, $children, $longitude, $latitude){
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.worldota.net/api/b2b/v3/search/serp/geo/',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERPWD =>env('EMERGING_TRAVEL_USER').':'.env('EMERGING_TRAVEL_PASS'),
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
        "checkin": "'.$check_in_date.'",
        "checkout": "'.$check_out_date.'",
        "residency": "gb",
        "language": "en",
        "guests": [
            {
                "adults": '.$adult.',
                "children": ['.$children.']
            }
        ],
        "longitude": '.$longitude.',
        "latitude": '.$latitude.',
        "radius": 1000,
        "currency": "USD"
    }',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return json_decode($response)->data->hotels; 
}

function getHotelData($hotelID) {
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.worldota.net/api/b2b/v3/hotel/info/',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERPWD =>env('EMERGING_TRAVEL_USER').':'.env('EMERGING_TRAVEL_PASS'),
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
        "id": "'.$hotelID.'",
        "language": "en"
    }',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    return json_decode($response)->data;
} 