<?php
$secret_key = '47888184'; // Your secret key
$expiry_time = time() + 3600; // Token expires in 1 hour (3600 seconds)

// Generate the token using HMAC-SHA256
$token = hash_hmac('sha256', $expiry_time, $secret_key);

// Output the token and expiry time
echo "Token: " . $token . "<br>";
echo "Expiry Time: " . $expiry_time . "<br>";
?>
