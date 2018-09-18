<?php

$key            = ' API_KEY ';
$spreadsheetsID = '11BCnspCt2Mut3nhc4WMY6CYTd0zF9C3eCzsk1AEpKLM';
$range          = 'A1:E6';

$url            ="https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetsID}/values/{$range}?key={$key}";

$json           = file_get_contents($url);
$json_decode    = json_decode($json,true);

foreach ($json_decode["values"] as $key1 => $value1) {
    foreach ($value1 as $key2 => $value2) {
       echo " '$value2' "; 
    }
    echo "\n";   
}

?>
