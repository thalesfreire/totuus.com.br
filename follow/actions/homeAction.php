<?php 
 
session_start();

$method = $_REQUEST['method'];

switch ($method) {

	case "getGeocodeXML" :

		
		$lat = $_REQUEST['lat'];
		$long = $_REQUEST['long'];

		$url ="http://maps.googleapis.com/maps/api/geocode/xml?latlng=".$lat.",".$long."&sensor=true";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		$geoLocationXML = curl_exec($ch);
		curl_close($ch);

		
	break;

}





?>
