<?php
require 'vendor/autoload.php';
// Check if it's a POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the text input sent via AJAX
    $text = $_POST['text'] ?? '';

    // Your Google API Key (or other API you are using)
    $apiKey = 'AIzaSyA4mPZSuK0lcDeJyCLdZ6wWKWq_6k6HVFk'; // Replace with your actual key

    // Define the API URL with the API Key
    $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-latest:generateContent?key=$apiKey";

    $parsedown = new Parsedown();
    // Prepare the data for the API request
    $data = [
        'contents' => [
            [
                'parts' => [
                    ['text' => $text]
                ]
            ]
        ]
    ];

    // Initialize cURL session
    $ch = curl_init($url);

    // Set the cURL options
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
    ]);

    // Encode the data into JSON and send it in the POST request
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    // Execute the cURL request and store the response
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        echo 'Error: ' . curl_error($ch);
    } else {
        // Decode the response from the API
        $responseData = json_decode($response, true);

        // Check if the API returned valid data and access the generated text
        if (isset($responseData['candidates'][0]['content']['parts'][0]['text'])) {
            // Extract the generated content as plain text
            $generatedText = $responseData['candidates'][0]['content']['parts'][0]['text'];
            echo $parsedown->text(text: $generatedText); // Return the generated content
        } else {
            echo "Error: No content generated.";
        }
    }

    // Close the cURL session
    curl_close($ch);
} else {
    echo "No POST data received.";
}
