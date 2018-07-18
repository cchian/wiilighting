<?php
$access_token = 'SF4TvfzIJuukCH+nNib1LSQm3figVCkXg7aXIzOK7NqPuCbhv8HOdW07VR6TscS3m+x/rq5ItU97Wslj1k0pkTpwvj6XlN5uHuUMP3YANI3YMbdtZdefni7Vu1cdwkgmzRKkT9yt5EjF/5Z/0s3DFQdB04t89/1O/w1cDnyilFU=';
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