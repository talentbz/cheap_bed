<?php

namespace App\Http\Controllers\Front;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $getDatas = [];
        return view('front.pages.home.index', [
            'getDatas'  => $getDatas,
        ]);
    }

    public function hotel_list(Request $request)
    {
        return view('front.pages.hotel_list.index');
    }
    
    public function search(Request $request)
    {
        $city = $request->city;
        $dates = $request->dates;
        $rooms =$request->qtyInput_rooms;
        $adult = $request->qtyInput_adult;
        $children = $request->qtyInput_children;
        $check_in_date = substr($dates, 0, 10);
        $check_out_date = substr($dates, 13, 10);
        $longitude = $request->cityLng; 
        $latitude = $request->cityLat;
        $ip_address = $request->ip();
        $sessionId = getHotelData($ip_address, $check_in_date, $check_out_date, $longitude, $latitude, $adult, $children, $rooms)->status->sessionId;
        $getDatas = getHotelData($ip_address, $check_in_date, $check_out_date, $longitude, $latitude, $adult, $children, $rooms)->itineraries;
        return view('front.pages.search.index', [
            'getDatas'  => $getDatas,
            'sessionId' => $sessionId,
        ]);
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

    public function hotel_details(Request $request, $sessionId, $productId, $tokenId, $hotelId, $hotel_price)
    {
        $roomData = getRoomData($sessionId, $productId, $tokenId, $hotelId)->roomRates->perBookingRates;
        $hotelContents = getHotelContents($sessionId, $productId, $tokenId, $hotelId);
        
        return view('front.pages.hotel_details.index', [
            'roomData'  => $roomData,
            'hotelContents'  => $hotelContents,
            'hotel_price' =>$hotel_price,
        ]);
    }

    public function wishlist(Request $request)
    {
        return view('front.pages.wishlist.index');
    }

    public function test(Request $request)
    {
        $sessionId =$request->sessionId;
        $productId =$request->productId;
        $tokenId =$request->tokenId;
        $hotelId =$request->hotelId;

        $data = getRoomData($sessionId, $productId, $tokenId, $hotelId);
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
