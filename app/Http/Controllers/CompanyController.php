<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function insertCompany(){
        $city = new Company;

        $city->name = 'Asian Cars';

        $city->save();
    }
}
