<?php

    $api_url = "https://api.databisnis.id:443/v1/chain/get_account";
    
    $data = array(
    "account_name" => "tomivexan"
    );

    $encodedData = json_encode($data);
    $curl = curl_init($api_url);
    // $data_string = urlencode(json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt( $curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $encodedData);
    $result = curl_exec($curl);

    print $result;

    curl_close($curl);