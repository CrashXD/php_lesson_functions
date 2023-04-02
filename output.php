<?php

$array = [3, 4, 2, 'txt', 4];

$json_data = file_get_contents('input.txt');

$data = json_decode($json_data, true);

foreach ($data as $key => $value) {
    if (is_numeric($value)) {
        $data[$key] = $value * 2;
    }
}

$json_output = json_encode($data);

file_put_contents('output.txt', $json_output);