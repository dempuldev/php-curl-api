<?php

    // Dengan prinsip OOP 
    function get_CURL($url)
        {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        
        return json_decode($result, true);
        }

        // Ini keywords
        $result = get_CURL('http://localhost/php-curl-api/curl_post.php');

        $nama = $result['account_name'];
        $kuota_ram = $result['total_resources']['ram_bytes'];
        $kuota_cpu = $result['cpu_weight'];
        $saldo_vex = $result['core_liquid_balance'];

        echo 'Akun vexanium => '.$nama.'<br/>'; 
        echo 'Kuota RAM tersedia => '.$kuota_ram. ' bytes<br/>'; 
        echo 'Kuota CPU tersedia => '.$kuota_cpu. ' ms<br/><br/>';
        echo 'Saldo Vexanium coin anda => '.$saldo_vex. '<br/>';
?>