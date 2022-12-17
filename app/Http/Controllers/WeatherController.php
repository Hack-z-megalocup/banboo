<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index() {
        
        $cityName = 'Shimonoseki';
        $apiKey = 'aca786dd36879c4ba6c8dd591e5550f2';
        $url = "http://api.openweathermap.org/data/2.5/forecast?units=metric&lang=ja&q=$cityName&appid=$apiKey";
       
        $method = "GET";

        $client = new Client();

        $response = $client->request($method, $url);

        $data = $response->getBody();
        $data = json_decode($data, true);
        
        return response()->json($data);
    }
}