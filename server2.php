<?php
$uri = $_SERVER['REQUEST_URI'];
$filePath = __DIR__ . $uri;

if (is_file($filePath)) {
    $fileMimeType = mime_content_type($filePath);

    // Set the appropriate Content-Type header
    header("Content-Type: $fileMimeType");

    // Output the file contents
    readfile($filePath);
} else {
    // Return a 404 error if the file doesn't exist
    header("HTTP/1.1 404 Not Found");
    echo "404 Not Found";
}
