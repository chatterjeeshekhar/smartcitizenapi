<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    

    public function login(Request $request)
    {
    	return response()->json([
    		'success' => false,
    		'message' => 'Insufficient parameters provided.',
    	]);
    }

    public function register(Request $request)
    {
    	return response()->json([
    		'success' => false,
    		'message' => 'Insufficient parameters provided.',
    	]);
    }
}
