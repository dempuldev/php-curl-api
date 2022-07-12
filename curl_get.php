<?php
    $ch = curl_init();

    $api_url = "https://pokeapi.co/api/v2/ability/";

    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    // Error handling dan tampilkan data
    if ($e = curl_error($ch) ) {
        echo $e;
    } else {
        $decode = json_decode($response, true);
        header('Content-type: text/javascript');

        //Print the json data after decode
        echo json_encode($decode, JSON_PRETTY_PRINT);
        
    };

    // End request
    curl_close($ch);
?>