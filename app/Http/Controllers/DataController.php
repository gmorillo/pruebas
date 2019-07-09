<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DataController extends Controller
{
    public function getCountries()
    {
        $countries = DB::table('countries')->pluck("name","id");
        return view('dropdown',compact('countries'));
    }

    public function getStates($id) 
    {
        $states = DB::table("states")->where("countries_id",$id)->pluck("name","id");
        return json_encode($states);
    }

    public function index(){
        $lat = '-23.91721';
        $long = '151.22630';

        return view('asset-master.properties.map', compact('lat', 'long'));
    }
}