<?php

namespace App\Http\Controllers;

use App\Models\userlocation;
use App\Models\User;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;




class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ip = $request->ip();

        return $ip;

        $currentUserInfo = Location::get($ip);

        // dd($currentUserInfo->countryName);

        $userLocation = new userLocation();
        $userLocation->ip = $ip;
        $userLocation->userid = Session()->get('loginId');
        $userLocation->country_name = $currentUserInfo->countryName;
        $userLocation->city_name = $currentUserInfo->cityName;
        $userLocation->zip_code = $currentUserInfo->zipCode;
        $userLocation->latitude = $currentUserInfo->latitude;
        $userLocation->longitude = $currentUserInfo->longitude;

        // $res = $userLocation -> save();



        // dd($currentUserInfo->latitude);

        return view ('location', compact('ip', 'currentUserInfo'));
    }


    public function welcome()
    {
        $currentUserInfo = Location::get('185.100.4.172');

        // dd($currentUserInfo->countryName);

        return view('welcome', compact('currentUserInfo'));
    }

    public function find(Request $request)
    {
        $place = $request->place;

        return view('find', compact('place'));
    }




}
