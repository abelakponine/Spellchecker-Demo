<?php

    require_once 'config.php';

    $curl = curl_init();
    $query = $_POST['query'];
    $lang = $_POST['lang'];

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://35.197.120.214:5000/api/v1/spell',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('text' => $query,'lang' => $lang),
    ));
    
    $response = curl_exec($curl);
    curl_close($curl);
    echo $response;
?>