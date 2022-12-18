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

         return view('dashboard', [
             'list' => $data['list']
         ]);
    }
}

// list > dt_txt : 予測されるデータの時間、ISO、UTC
// list > weather > description : 気象情報詳細
// list > main > temp : 温度
// list > main > pressure : 大気圧
