<?php
/**
 * Created by PhpStorm.
 * User: LEI_Siqi
 * Date: 22/04/2018
 * Time: 19:51
 */

$file = dirname('.') . DIRECTORY_SEPARATOR . 'request_json.txt';

/* if the file doesn't exist yet, create it for the fist time */
if (!file_exists($file)) {
    $handle = fopen($file, "w+");
    $requestCount = array(
        "Deal_ID" => 0,
        "NewPoker" => [],
    );
    fwrite($handle, json_encode($requestCount));
    fclose($handle);
}

if(isset($_SERVER['REQUEST_METHOD'])) {

    $requestCount = json_decode(file_get_contents($file), true);

    if($_SERVER['REQUEST_METHOD'] == 'GET') {

        $requestCount['Deal_ID']++;
        $requestCount["NewPoker"] = $_GET;
    }
    else {
        echo "error";
        exit(1|"Request error");
    }

    $result = json_encode($requestCount);
    file_put_contents($file, $result);
    echo ($result);
}

