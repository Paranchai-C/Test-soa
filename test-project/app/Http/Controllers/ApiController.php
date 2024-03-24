<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    //

    public function test(Request $request)
    {
        $response = Http::post('localhost:8080/employees/add')->json();

        dd($response);
    }
}
