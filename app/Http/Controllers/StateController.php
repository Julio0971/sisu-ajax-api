<?php

namespace App\Http\Controllers;

use App\Models\State;

use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index ($country_id) {
        $states = State::where('country_id', $country_id)->get();

        return response()->json(compact('states'), 200);
    }
}