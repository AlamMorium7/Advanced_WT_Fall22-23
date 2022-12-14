<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SearchAmbulanceModel;
use App\Models\DoctorModel;


class AmbulanceController extends Controller
{
    
   
    function APIList(){
        return DoctorModel::all();
    }
}
