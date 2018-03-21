<?php
/**
 * Created by PhpStorm.
 * User: syacko
 * Date: 3/21/18
 * Time: 9:09 AM
 */

$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://spotlightmartdev.auth0.com/oauth/token",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "{\"client_id\":\"4b7312zrY5eeaU0zdNeBg5LxIoG7RiEz\",\"client_secret\":\"9f1_2mLdGKdetHVfMM_A95f5izfZa5_XcSgL2cNzzTngwZn25Pm-wkxH11ki5Rm_\",\"audience\":\"https://localhost/members\",\"grant_type\":\"client_credentials\"}",
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