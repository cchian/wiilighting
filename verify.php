<?php
$access_token = 'eoy3Hd5JM5fe2dA7cKJanFfS6fhxTbDzykKpB5w2zBIM5qYzdQ1y9cWIPNCOyq6lQAbMtLr3sfQn3mRV2ETk1mgyWmWCEKIr+A6pEXQBstHgCf+0fd4jwmM1bBPwY+uSUvyBjPcCr9fSXtAKyhfsJAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>