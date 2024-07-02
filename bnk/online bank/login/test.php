<?php

	// Initialize cURL.
    $ch = curl_init();

    // Set the URL that you want to GET by using the CURLOPT_URL option.
    curl_setopt($ch, CURLOPT_URL, 'https://ipgeolocation.abstractapi.com/v1/?api_key=16miWJ3Nd9L9qYaEMR8cwUQAvCiHU2LNaf');
    
    // Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    // Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    
    // Execute the request.
    $data = curl_exec($ch);
    
    // Close the cURL handle.
    curl_close($ch);
    
    // Print the data out onto the page.
    echo $data;


?>