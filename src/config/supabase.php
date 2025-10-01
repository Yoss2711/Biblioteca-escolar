<?php
// Conexión básica a Supabase usando cURL
function supabaseRequest($query, $method = 'GET') {
    $url = "https://nwymtznkwvmqwtptpixp.supabase.co/rest/v1/books" . $query; 
    $apiKey = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Im53eW10em5rd3ZtcXd0cHRwaXhwIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTgzMDE0NzEsImV4cCI6MjA3Mzg3NzQ3MX0.ZFRK-K9s7yATi545-6a0qqySBa6XQ15zuSXdUFm52jo";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "apikey: $apiKey",
        "Authorization: Bearer $apiKey",
        "Content-Type: application/json"
    ]);

    if ($method !== 'GET') {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    }

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}
?>