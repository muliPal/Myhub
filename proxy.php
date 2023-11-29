<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Enable CORS headers
// Enable CORS headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type");

// Target URL (ITAX website)
$targetUrl = 'https://itax.kra.go.ke/KRA-Portal/';

// Fetch content from the target URL
$content = file_get_contents($targetUrl);

// Check if the content was successfully fetched
if ($content === FALSE) {
    http_response_code(500);
    echo 'Failed to fetch content from ITAX.';
} else {
    echo $content;
}
?>
