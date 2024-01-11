<?php
// Set the appropriate headers to allow cross-origin requests
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: *");

// Get the image URL from the query string
$imageUrl = $_GET['url'];

// Fetch the image content
$imageContent = file_get_contents($imageUrl);

// Output the appropriate content type header
header("Content-type: image/jpeg");

// Output the image content
echo $imageContent;
?>
