<?php
include_once('header.php');
?>

<?php
require('classes/location.php');
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;


if($_GET){
  $location = $_GET['place'];
  $location = str_replace(" ", "+", $location);
  $place = new location();
  $geoLocation = $place->getGeoLocation($location);

}

?>
<div class="container">
  <div class="jumbotron">
    <h1><?php echo $geoLocation[1] ?></h1> 
    <p>Los Angeles is a sprawling Southern California city and the center of the nation's film and television industry. Near its iconic Hollywood sign, studios such as Paramount Pictures, Universal and Warner Brothers offer behind-the-scenes tours. On Hollywood Boulevard, TCL Chinese Theatre displays celebrities' hand- and footprints, the Walk of Fame honors thousands of luminaries and vendors sell maps to stars' homes.</p> 
  </div>
</div>
<div class="container">
  <!-- <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">Flights</a></li>
  <li role="presentation"><a href="#page1">Accomodation</a></li>
  <li role="presentation"><a href="#">To do</a></li>
</ul> -->

<!--
  Bootstrap data-toggle Via data-* Attributes
  Version:  Rev 1
  Date: 22/11/2017
  @reference https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_ref_js_tab&stacked=h
  -->
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#flights">Flights</a></li>
    <li><a data-toggle="tab" href="#accommodation">Accomodation</a></li>
    <li><a data-toggle="tab" href="#todo">To do</a></li>
  </ul>

  <div class="tab-content">
    <div id="flights" class="tab-pane fade in active">
      <p>Flight details will go here</p>
    </div>
    <div id="accommodation" class="tab-pane fade">
      <p>Accomodation</p>
    </div>
    <div id="todo" class="tab-pane fade">
      <p>To dos will go here</p>
    </div>
  </div>



</div>



<?php

$curl_arrayOfPictures = new Curl();
$curl_arrayOfPictures->setOpt(CURLOPT_SSL_VERIFYPEER, false);
$curl_arrayOfPictures->get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='.$geoLocation[0].'&radius=5000&key=AIzaSyDwShNIRbQ1o9eevmGD9loCcXtGkcLxZIk');



$results = $curl_arrayOfPictures->response;

for ($i=0; $i < 3; $i++) { 
  # code...
  $photoreference = $curl_arrayOfPictures->response->results[$i]->photos[0]->photo_reference;

  $curl_singlePicture = new Curl();
  $curl_singlePicture->setOpt(CURLOPT_SSL_VERIFYPEER, false);
  $curl_singlePicture->get('https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference='.$photoreference.'&key=AIzaSyDwShNIRbQ1o9eevmGD9loCcXtGkcLxZIk');

  //print_r(strpos($curl_singlePicture->response, "https").'<br>');
  //print_r(substr($curl_singlePicture->response, 168).'<br>');
  $address = substr($curl_singlePicture->response, 168);
  //print_r(substr($address, 0, -29).'<br>');
  echo '<img src="'.substr($address, 0, -29).'" alt="Sth is wrong">';
}
echo '<br>';

echo '<h3>Flights from '.$geoLocation[1].'</h3>';

$curl_flights = new Curl();
  //$curl_flights->setOpt(CURLOPT_SSL_VERIFYPEER, false);
  $curl_flights->get('http://api.travelpayouts.com/v1/city-directions?origin='.$geoLocation[2].'&currency=usd&token=367871546678727d41f584966e3e178d');
echo $curl_flights->response->data->BKK->destination.'<br>';
echo $curl_flights->response->data->BKK->departure_at.'<br>';
echo $curl_flights->response->data->BKK->price.'<br>';

echo '<h3>Hotels in '.$geoLocation[1].'</h3>';

$curl_hotels = new Curl();
  //$curl_flights->setOpt(CURLOPT_SSL_VERIFYPEER, false);
  $curl_hotels->get('http://api.sandbox.amadeus.com/v1.2/hotels/search-circle?latitude=34.0&longitude=-118.2&radius=50&check_in=2017-11-20&check_out=2017-11-25&chain=RT&currency=EUR&number_of_results=50&apikey=dhJFMp4elpScstAnhXNXHJdBmL0596Ve');
//var_dump($curl_hotels);
for($i = 0; $i < sizeof($curl_hotels->response->results); $i++){
echo $curl_hotels->response->results[$i]->property_name.'<br>';
echo $curl_hotels->response->results[$i]->total_price->amount.'<br>';
}

?>

