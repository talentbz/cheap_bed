<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Config;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

// prefix word for file name and id
function str_limit($string, $length) {
    return Str::limit($string, $length, ' ...');
}

function getHotelData($ip_address, $check_in_date, $check_out_date, $longitude, $latitude, $adult, $children, $rooms){
    

    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://travelnext.works/api/hotel-api-v6/hotel_search',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
        "user_id":"'.Config::get('constants.TRAVELOPRO.HOEL_USER').'",
        "user_password": "'.Config::get('constants.TRAVELOPRO.HOTEL_PASS').'",
        "access": "'.Config::get('constants.TRAVELOPRO.HOTEL_ACESS').'",
        "ip_address": "'.$ip_address.'",
        "checkin": "'.$check_in_date.'",
        "checkout": "'.$check_out_date.'",
        "longitude": '.$longitude.',
        "latitude": '.$latitude.',
        "occupancy": [
            {
              "room_no": '.$rooms.',
              "adult": '.$adult.',
              "child": '.$children.',
              "child_age": [
                0
              ]
            }
          ],
        "requiredCurrency": "GBP"
    }',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    // $getDatas = json_decode($response)->itineraries;
    
    // $myCollectionObj = collect($getDatas);
    // $data = paginate($myCollectionObj);
    //$paginator = new LengthAwarePaginator($getDatas, count($getDatas), 1, 10);
    return json_decode($response);
}
function getRoomData($sessionId, $productId, $tokenId, $hotelId){
    $response = Http::post('https://travelnext.works/api/hotel-api-v6/get_room_rates', [
        "sessionId" => $sessionId,
        "productId" => $productId,
        "tokenId" => $tokenId,
        "hotelId" => $hotelId,
    ]);
    return json_decode($response);
}
function getHotelContents($sessionId, $productId, $tokenId, $hotelId){
    $response = Http::get('https://travelnext.works/api/hotel-api-v6/hotelDetails', [
        "sessionId" => $sessionId,
        "productId" => $productId,
        "tokenId" => $tokenId,
        "hotelId" => $hotelId,
    ]);
    return json_decode($response);
}
function paginate($items, $perPage = 10, $page = null, $options = [])
{
    $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
    $items = $items instanceof Collection ? $items : Collection::make($items);
    return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
}
