<?php

namespace App\Http\Controllers;

class FlightController extends Controller
{
    public function flightsearch()
    {
        $client = new \GuzzleHttp\Client();
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $body = '{
            "Segment": [
                {
                    "DepFrom": "BKK",
                    "ArrTo": "PER",
                    "DepDate": "2023-10-31"
                }
            ],
            "tripType": "oneway",
            "Adult": 1,
            "Child": 0,
            "Infant": 0,
            "Class": "Economy"
        }';

        $request = new \GuzzleHttp\Psr7\Request('POST', 'https://gallpax.flyjatt.com/v1/Duffel/AirSearch.php', $headers, $body);
        $res = $client->sendAsync($request)->wait();
        $data = json_decode($res->getBody(), true);


        return view('flightsearch', ['data' => $data]);
    }
}
