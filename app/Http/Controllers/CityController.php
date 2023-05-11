<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function insertCity(){
        $city = new City;

        $city->name = 'Caracas';

        $city->save();
    }
}
