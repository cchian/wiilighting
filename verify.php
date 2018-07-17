<?php
$access_token = 'Dtt3ekT+E2A/AKks6rKMWboWH+OLvCA/gEh3nOEj53OuDEV9IqrPnd84FecwGYltQAbMtLr3sfQn3mRV2ETk1mgyWmWCEKIr+A6pEXQBstFDCzAM0LrcV/exEmNeMjp9kvgh06Jcc33g456W0X+YtgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
