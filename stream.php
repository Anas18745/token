<?php
$secret_key = '47888184';
$expiry_time = $_GET['expiry']; // The expiry time sent by the client
$token = $_GET['token']; // The token sent by the client

$expected_token = hash_hmac('sha256', $expiry_time, $secret_key);

if (hash_equals($expected_token, $token) && time() < $expiry_time) {
    // Serve the video segment or playlist
    // Example: readfile('/path/to/segment.ts');
    // Or output the m3u8 playlist.
} else {
    header("HTTP/1.1 403 Forbidden");
    echo "Access Denied";
}
?>
