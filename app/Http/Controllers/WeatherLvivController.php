<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;
class WeatherLvivController
{
    public function index( ){

        $response = Http::withHeaders([
            "x-api-key" => "e68921e744d153ffa0e96a34e7664ffd3ec8649d2f331c0dffa6a9831ce5948e"
        ])->get('https://api.ambeedata.com/weather/forecast/by-lat-lng?lat=49.8397&lng=24.0297&units=si&filter=%1Bhourly%1Cminutely%1Cdaily%1D');

       // var_dump($response->json());
        return view('lviv',['response'=>$response->json()]);
    }
}
