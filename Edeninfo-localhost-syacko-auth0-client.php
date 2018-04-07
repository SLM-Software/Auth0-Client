<?php
/**
 * Created by PhpStorm.
 * User: syacko
 * Date: 3/13/18
 * Time: 5:32 PM
 */
$curl = curl_init();

$postFields[0] = "{\"client_id\":\"sYcJC2UzUCBsNbq38LwQuZ9z28gGWC54\",\"client_secret\":\"52nHcXNMOL1LO1BU-4Wr09Fl5SyBiMbMoA85x6QIE7ur9UvaOngW-vnAd_fcNVY_\",\"audience\":\"https://localhost/edeninfo\",\"grant_type\":\"client_credentials\"}";

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://spotlightmartdev.auth0.com/oauth/token",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => $postFields[0],
	CURLOPT_HTTPHEADER => array(
		"content-type: application/json"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
	$token = json_decode($response)->access_token;
	echo "\n\n\$token=$token";
}