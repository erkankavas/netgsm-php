<?php

//netgsm turkish voip sms operator - php api by ERKANKAVAS 2023 :P
//have a question please contact @erkankavas in twitter :P

$username = "850xxxxxxxxxx"; // tel number
$password = urlencode("xxxxxxxxxx"); // pass api key

$tel = "5xxxxxxxxx"; //who you wanna send sms :)
$mes = "merhaba!"; // message you wanna send.
      
$url= "https://api.netgsm.com.tr/sms/send/get/?usercode=".$username."&password=".$password."&gsmno=".$tel."&message=".$mes."&msgheader=".$username;

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$http_response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

//you can track response or http code :) for check :P

// close cURL resource, and free up system resources
curl_close($ch);
?>
