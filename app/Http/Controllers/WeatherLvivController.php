<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;
class WeatherLvivController
{
    public function index()
    {

        $response = Http::withHeaders([
            "x-api-key" => "9fa236c616250fa4529b0d0326493118e32379cf7872aca87bf5ace0699d83de"
            ])->get('https://api.ambeedata.com/weather/forecast/by-lat-lng?lat=49.8397&lng=24.0297&units=si&filter=%1Bhourly%1Cminutely%1Cdaily%1D');
            return view('lviv', ['response' => $response->json()]);
    }
}
