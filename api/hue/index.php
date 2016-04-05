<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new \Phue\Client('192.168.0.20', '1cc68fc7203dbab4582c3d4b5caf7223');


try {
  $client->sendCommand(
  new \Phue\Command\Ping
);
} catch (\Phue\Transport\Exception\ConnectionException $e) {
  echo 'There was a problem accessing the bridge';
}



// From the client
foreach ($client->getLights() as $lightId => $light) {
  echo "Id #{$lightId} - {$light->getName()}", "\n";
}


if(isset($_POST)){
  $params = json_decode(file_get_contents('php://input'),true);
  if (isset($params['light-id'])){

    $light = $client->getLights()[$params['light-id']];
    if( $params['light-action'] == "on" ) $light->setOn(true);
    if( $params['light-action'] == "off" ) $light->setOn(false);

    echo "ope sur -> ".$params['light-id'];

  }else{
    echo "Light ID n'est pas def";
  }
}








?>
