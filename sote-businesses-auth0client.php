<?php
/**
 * Created by PhpStorm.
 * User: syacko
 * Date: 3/13/18
 * Time: 5:32 PM
 */
$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://getsote.eu.auth0.com/oauth/token",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "{\"client_id\":\"iXwqjc0Y2mSGG4w0S8xljJdweQDcHKBR\",\"client_secret\":\"of4R37KlJ96ZuVXJ_BcRb8fgCJcnVdRSAN5sjPbeicf2eUv8FF38Lh7y-SpZXvaX\",\"audience\":\"https://api.getsote.com/businesses\",\"grant_type\":\"client_credentials\"}",
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
}