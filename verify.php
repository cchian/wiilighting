<?php
$access_token = 'CcQyrE8713u986H4V2CzJpxKzNsNheCii/zWa/Ow6inTr2aOlFriTlW07Qj2lqJfQAbMtLr3sfQn3mRV2ETk1mgyWmWCEKIr+A6pEXQBstEKXwCwnVi+lbK5oybIXbRkvBp456GoJ2fX4zpm1AMh4AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
