<?php
// Netgsm Turkish VoIP/SMS Operator

$username = "850xxxxxxxxxx"; // Telephone number
$password = urlencode("xxxxxxxxxx"); // Password as API key

$tel = "5xxxxxxxxx"; // Recipient phone number
$mes = "merhaba!"; // Message content

$url = "https://api.netgsm.com.tr/sms/send/get/?usercode=" . $username . "&password=" . $password . "&gsmno=" . $tel . "&message=" . urlencode($mes) . "&msgheader=" . $username;

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$http_response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// You can track response or HTTP code for verification

// Close cURL resource and free up system resources
curl_close($ch);

echo "Response: " . $http_response . "\n";
echo "HTTP Code: " . $http_code . "\n";
?>
