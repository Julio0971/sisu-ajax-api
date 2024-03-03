<?php

namespace App\Http\Controllers;

use App\Models\City;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index ($state_id) {
        $cities = City::where('state_id', $state_id)->get();

        return response()->json(compact('cities'), 200);
    }
}