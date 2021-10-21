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
    }
    public function getState(Request $request)
    {
        $country_id = $request->country_id;
        return $this->locationManger->getState($country_id);
    }
    public function getCity(Request $request)
    {
        $region_id = $request->state_id;
        return $this->locationManger->getCity($region_id);
    }
}
