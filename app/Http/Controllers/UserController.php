<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function index () {
        $users = User::all();

        return response()->json(compact('users'), 200);
    }

    function store (Request $request) {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'age' => ['required', 'integer', 'between:18,99'],
            'city_id' => ['required', 'integer', 'exists:cities,id']
        ]);

        User::create($data);

        return response()->json([
            'message' => 'Usuario creado correctamente'
        ], 200);
    }
}