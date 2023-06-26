<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    // Initialize cURL.
    $ch = curl_init();

    // Set the URL that I want to scrape.
    curl_setopt($ch, CURLOPT_URL, "https://www.reddit.com/r/soccer/");

    // Set cURL option to return the result as a string.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Set the user agent.
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537');

    // Execute the cURL session and store the result in $output.
    $output = curl_exec($ch);

    // Close the cURL session.
    curl_close($ch);

    // Use PHP's DOMDocument class to parse the HTML.
    $dom = new DOMDocument();

    // Load the HTML. The @ before the method call suppresses warnings that
    // loadHTML might throw because of invalid HTML in the page.
    @$dom->loadHTML($output);

    // Get all the h3 elements (assuming that's where your data is).
    $headlines = $dom->getElementsByTagName('h3');

    // Loop over the h3 elements.
    foreach ($headlines as $headline) {
        echo $headline->nodeValue . "\n";
    }
?>
