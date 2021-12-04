<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IncrementGetData;
use App\Models\Test;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $getDatas = IncrementGetData::offset(0)->limit(6)->get();
        foreach($getDatas as $row){
            if (!empty($row['images'])) $row->first_image = str_replace('{size}', '240x240', $row['images'][0]);
            else $row->first_image = '';
        }
        return view('front.pages.home.index', [
            'getDatas'  => $getDatas,
        ]);
    }

    public function hotel_list(Request $request)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.worldota.net/api/b2b/v3/search/serp/hotels/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_USERPWD =>env('EMERGING_TRAVEL_USER').':'.env('EMERGING_TRAVEL_PASS'),
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
            "checkin": "2021-12-05",
            "checkout": "2021-12-06",
            "residency": "gb",
            "language": "en",
            "guests": [
                {
                    "adults": 1,
                    "children": []
                }
            ],
            "region_id": 965849721,
            "currency": "EUR"
        }',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        //dd ($response);
        return view('front.pages.hotel_list.index');
    }

    public function about_us(Request $request)
    {
        return view('front.pages.about.index');
    }

    public function contact_us(Request $request)
    {
        return view('front.pages.contact.index');
    }

    public function help(Request $request)
    {
        return view('front.pages.help.index');
    }

    public function faq(Request $request)
    {
        return view('front.pages.faq.index');
    }

    public function hotel_details(Request $request, $id)
    {
        return view('front.pages.hotel_details.index');
    }

    public function wishlist(Request $request)
    {
        return view('front.pages.wishlist.index');
    }

    public function test(Request $request)
    {
        $data = Test::get();
        dd($data);
    }
    public function store(Request $request)
    {
        $post = new Test;
 
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $request->slug;
 
        $post->save();
 
        return response()->json(["result" => "ok"], 201);
    }
}