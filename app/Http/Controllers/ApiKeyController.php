<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiKeyController extends Controller
{
    public function getApiKey()
    {
        return response()->json(['apiKey' => env('GOOGLE_MAPS_API_KEY')]);
    }}
