<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index(){
        return view('weather');
    }
    public function getWeather(Request $request)
    {
        $city = $request->input('location');
        $apiKey = env('WEATHER_API_KEY');
        // dd($apiKey,$city);
        
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', "https://api.tomorrow.io/v4/weather/realtime?location={$city}&apikey={$apiKey}", [
            'headers' => [
              'accept' => 'application/json',
            ],
        ]);
        
        $jsondata = $response->getBody()->getContents();
        $data = json_decode($jsondata, true);
        // dd($data);
        return view('weather_data', compact('data'));       
        
    }
}
