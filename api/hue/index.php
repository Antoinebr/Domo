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

    if(isset($params['light-action'])){
      ($light->isOn()) ? $light->setOn(false) : $light->setOn(true);
    }

    if(isset($params['light-mood'])){
      print_r($params);
      $light->setOn(true);
      $light->setHue($params['light-value']);
      $light->setBrightness($params['light-brightness']);

    }

    echo "ope sur -> ".$params['light-id'];

  }else{
    echo "Light ID n'est pas def";
  }
}








?>
