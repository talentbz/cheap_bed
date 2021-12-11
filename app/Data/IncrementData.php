<?php

namespace App\Data;
use App\Models\Mongo\IncrementGetData;

class IncrementData {

    public function __invoke()
    {   
        try {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.worldota.net/api/b2b/v3/hotel/info/incremental_dump/',
                // CURLOPT_URL => 'https://api.worldota.net/api/b2b/v3/hotel/info/dump/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_USERPWD =>env('EMERGING_TRAVEL_USER').':'.env('EMERGING_TRAVEL_PASS'),
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'{
                    "inventory": "all",
                    "language": "en"
                }',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            
            $data = file_get_contents("compress.zstd://".json_decode($response)->data->url);
            dd(json_decode($response)->data);
            //splite to son file
            // $tokens = explode('} {', $data);
            $tokens = preg_split("/}[\s]?{/", $data);  

            // delete all rows
            IncrementGetData::truncate(); 

            //insert increment data
            for($i = 0; $i < count($tokens); $i++) {
                $token = $tokens[$i];
                if ($i == 0) $token = $token . '}';
                else if ($i == count($tokens) - 1) $token = '{' . $token;
                else $token = '{' . $token . '}';
                $result = json_decode($token);
                $post = new IncrementGetData;
                
                isset($result->address) ? $post->address = $result->address : $post->address = '';
                isset($result->amenity_groups) ? $post->amenity_groups = $result->amenity_groups : $post->amenity_groups ='';
                isset($result->check_in_time) ? $post->check_in_time = $result->check_in_time : $post->check_in_time = '';
                isset($result->check_out_time) ? $post->check_out_time = $result->check_out_time : $post->check_out_time = '';
                isset($result->description_struct) ? $post->description_struct = $result->description_struct : $post->description_struct = '';
                isset($result->id) ? $post->id = $result->id : $post->id = '';
                isset($result->images) ? $post->images = $result->images : $post->images ='' ;
                isset($result->kind) ? $post->kind = $result->kind : $post->kind='';
                isset($result->name) ? $post->name = $result->name : $post->name='';
                isset($result->phone) ? $post->phone = $result->phone : $post->phone='';
                isset($result->postal_code) ? $post->postal_code = $result->postal_code : $post->postal_code = '';
                isset($result->room_groups) ? $post->room_groups = $result->room_groups : $post->room_groups='';
                isset($result->region) ? $post->region = $result->region : $post->region='';
                isset($result->star_rating) ? $post->star_rating = $result->star_rating : $post->star_rating='';
                isset($result->serp_filters) ? $post->serp_filters = $result->serp_filters : $post->serp_filters='';
                isset($result->deleted) ? $post->deleted = $result->deleted : $post->deleted='';
                isset($result->metapolicy_struct) ? $post->metapolicy_struct = $result->metapolicy_struct : $post->metapolicy_struct='';
                isset($result->metapolicy_extra_info) ? $post->metapolicy_extra_info = $result->metapolicy_extra_info : $post->metapolicy_extra_info='';
                isset($result->star_certificate) ? $post->star_certificate = $result->star_certificate : $post->star_certificate='';
                isset($result->facts) ? $post->facts = $result->facts : $post->facts='';
                isset($result->payment_methods) ? $post->payment_methods = $result->payment_methods : $post->payment_methods='';
                isset($result->hotel_chain) ? $post->hotel_chain = $result->hotel_chain : $post->hotel_chain='';

                $post->save();
                echo ">>>>>>>>>>>>>> $i data saved  " . date("Y-m-d H:i:s") . PHP_EOL;
            }

        } catch (\Exception $e) {
            print_r($e->getMessage());
        }
    }
}