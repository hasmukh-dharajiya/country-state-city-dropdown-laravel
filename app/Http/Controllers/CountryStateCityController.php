<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\CountryStateCity;

class CountryStateCityController extends Controller
{
    private $locationManger;
    public function __construct(CountryStateCity $countryStateCity)
    {
        $this->locationManger = $countryStateCity;
    }
    public function getCountry()
    {
        return $this->locationManger->getCountry();
//        $data['countries'] = Country::get(["name","id"]);
//        return view('country-state-city',$data);
    }
    public function getState(Request $request)
    {
        $country_id = $request->country_id;
        return $this->locationManger->getState($country_id);

//        $data['states'] = State::where("country_id",$request->country_id)
//            ->get(["name","id"]);
//        return response()->json($data);
    }
    public function getCity(Request $request)
    {
        $region_id = $request->state_id;
        return $this->locationManger->getCity($region_id);
//        $data['cities'] = City::where("state_id",$request->state_id)
//            ->get(["name","id"]);
//        return response()->json($data);
    }
}
