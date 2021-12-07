<?php

namespace App\Data;
use App\Models\Mongo\RegionDumpGetData;

class RegionDump {

    public function __invoke()
    {   
        try {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.worldota.net/api/b2b/v3/hotel/region/dump/',
                // CURLOPT_URL => 'https://api.worldota.net/api/b2b/v3/hotel/info/dump/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_USERPWD =>env('EMERGING_TRAVEL_USER').':'.env('EMERGING_TRAVEL_PASS'),
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'{}',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            
            $data = file_get_contents("compress.zstd://".json_decode($response)->data->url);
            //splite to son file
            // $tokens = explode('} {', $data);
            $tokens = preg_split("/}[\s]?{/", $data);  

            // delete all rows
            RegionDumpGetData::truncate(); 

            //insert increment data
            for($i = 0; $i < count($tokens); $i++) {
                $token = $tokens[$i];
                if ($i == 0) $token = $token . '}';
                else if ($i == count($tokens) - 1) $token = '{' . $token;
                else $token = '{' . $token . '}';
                $result = json_decode($token);
                $post = new RegionDumpGetData;
                
                isset($result->country_name) ? $post->country_name = $result->country_name : $post->country_name = '';
                isset($result->country_code) ? $post->country_code = $result->country_code : $post->country_code ='';
                isset($result->center) ? $post->center = $result->center : $post->center = '';
                isset($result->hotels) ? $post->hotels = $result->hotels : $post->hotels = '';
                isset($result->iata) ? $post->iata = $result->iata : $post->iata = '';
                isset($result->id) ? $post->id = $result->id : $post->id = '';
                isset($result->type) ? $post->type = $result->type : $post->type ='' ;
                isset($result->name) ? $post->name = $result->name : $post->name='';

                $post->save();
                echo ">>>>>>>>>>>>>> $i data saved  " . date("Y-m-d H:i:s") . PHP_EOL;
            }

        } catch (\Exception $e) {
            print_r($e->getMessage());
        }
    }
}