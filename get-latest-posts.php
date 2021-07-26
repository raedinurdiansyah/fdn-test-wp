<?php

    $url = 'localhost:80/wp-json/wp/v2/posts';
    $url .= '?filter[orderby]=date&order=desc&per_page=10';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);
    if(curl_errno($ch))
        echo 'Curl error: '.curl_error($ch);
    curl_close($ch);
    $cek = json_decode($res, true);

    echo "<pre>";
    print_r($cek);
    echo "</pre>";
