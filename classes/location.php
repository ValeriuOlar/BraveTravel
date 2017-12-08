<?php

require('vendor/autoload.php');

use \Curl\Curl;

class location
{
    public $geoLocation = array();

    function getGeoLocation($location){
        $urlRequest =  "https://maps.googleapis.com/maps/api/geocode/json?address=".$location."&key=AIzaSyBeCeRp2W0UBwmOIae3LkFqgljqx6uHnqU";

        $curl_geoLocation = new Curl();
		$curl_geoLocation->setOpt(CURLOPT_SSL_VERIFYPEER, false);
		$curl_geoLocation->get($urlRequest);

		$lat = $curl_geoLocation->response->results[0]->geometry->location->lat;
		$lng = $curl_geoLocation->response->results[0]->geometry->location->lng;
		$name = $curl_geoLocation->response->results[0]->formatted_address;
		$iata = "LAX";
		$geoLocation[0] = $lat.",".$lng;
		array_push($geoLocation, $name);
		$geoLocation[2] = $iata;
		return $geoLocation;
    }
}