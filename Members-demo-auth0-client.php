<?php
/**
 * Created by PhpStorm.
 * User: syacko
 * Date: 3/13/18
 * Time: 5:32 PM
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
	CURLOPT_POSTFIELDS => "{\"client_id\":\"Qs0VyYHhfCBiJlPd5qh1BN80olgn81UE\",\"client_secret\":\"psWNlAjYELPFr_sMXRBmv3S3ZbOhScMCJh91T9LDhc2I1ubGdQNZzjfhUMqUZ6Hp\",\"audience\":\"https://demo.yackofamily.com/members\",\"grant_type\":\"client_credentials\"}",
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