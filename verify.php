<?php
$access_token = 'QfhtaUuuqVwcwbCVE7je1X2ZavUL6RzQlQwciKeEpcYOtRdNbvEdtAsUl5zs8gY/hXIDU2oi0tv+pFnvKQJfcrfqrAHAjR9KrqHzJzQQiHZr8koDBrD/ArG9DNu5Hc1hyqy0ZvMtigfiQZVQ54VMWwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;