<?php
$username = "850xxxxxxxxxx";
$password = urlencode("xxxxxxxxxx");

$tel = "5xxxxxxxxx";
$msg = "merhaba!";

$url = "https://api.netgsm.com.tr/sms/send/get/?usercode=" . $username . "&password=" . $password . "&gsmno=" . $tel . "&message=" . urlencode($msg) . "&msgheader=" . $username;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$http_response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

echo "Response: " . $http_response . "\n";
echo "HTTP Code: " . $http_code . "\n";
?>
