<?php

namespace App\Http\Controllers;

class FlightController extends Controller
{
    public function flightsearch()
    {

        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://gallpax.flyjatt.com/v1/Duffel/AirSearch.php',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
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
        }',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        
        $data =  json_decode($response, true);

        return view('flightsearch', ['data' => $data]);

    }
}
