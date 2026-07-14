<?php

define('APIBASEURL', 'https://wc.swissunihockey.ch/');


function runApiRequest($path)
{

    $url = APIBASEURL . $path;

    $url .= (strpos($url, '?') !== false ? '&' : '?');

    $response = wp_remote_get(
        $url,
        [
            'timeout' => 30
        ]
    );

    if (is_wp_error($response)) {
        return false;
    }

    return json_decode(
        wp_remote_retrieve_body($response)
    );
}