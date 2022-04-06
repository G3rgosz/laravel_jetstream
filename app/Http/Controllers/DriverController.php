<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Car;
class DriverController extends Controller
{
    public function cars(){
        return Driver::find(2)->cars;
    }
    public function drivers(){
        return Car::find(1)->drivers;
    }
}
