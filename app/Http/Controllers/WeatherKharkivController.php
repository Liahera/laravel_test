<?php


namespace App\Http\Controllers;


class WeatherKharkivController
{
    public function index()
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.ambeedata.com/weather/forecast/by-lat-lng?lat=49.9935&lng=36.2304&units=si&filter=%1Bhourly%1Cminutely%1Cdaily%1D",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "Content-type: application/json",
                "x-api-key: 9fa236c616250fa4529b0d0326493118e32379cf7872aca87bf5ace0699d83de"
            ],
        ]);
        $response = json_decode(curl_exec($curl));
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            // var_dump($response);
        }
        $icon = $response->data->forecast[0]->icon;
        return view('kharkiv', ['response' => $response, 'icon' => $icon]);
    }
}
