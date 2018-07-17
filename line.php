 <?php
  

function send_LINE($msg){
 $access_token = 'Dtt3ekT+E2A/AKks6rKMWboWH+OLvCA/gEh3nOEj53OuDEV9IqrPnd84FecwGYltQAbMtLr3sfQn3mRV2ETk1mgyWmWCEKIr+A6pEXQBstFDCzAM0LrcV/exEmNeMjp9kvgh06Jcc33g456W0X+YtgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Uc9f9fb5c97182ffbb68da4c0cad298b1',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
