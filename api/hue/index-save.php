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


if(isset($_POST)):
  require 'receipe.php';
endif;


?>


<!DOCTYPE html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>




  <form method="post">
    <input type="hidden" name="color-loop">
    <select name="light">
      <option value="1">Chambre</option>
      <option value="2">Salon gauche</option>
      <option value="3">Salon droit</option>
    </select>
    <button type="submit">LOOP COLOR</button>
  </form>


  <form method="post">
    <input type="hidden" name="progress">
    <select name="light">
      <option value="1">Chambre</option>
      <option value="2">Salon gauche</option>
      <option value="3">Salon droit</option>
    </select>
    <button type="submit">Progressif</button>
  </form>


  <form method="post">
    <select name="light">
      <option value="1">Chambre</option>
      <option value="2">Salon gauche</option>
      <option value="3">Salon droit</option>
    </select>
    <input type="hidden" name="color-green">
    <button type="submit">VERT </button>
  </form>


  <form method="post">
    <select name="light">
      <option value="1">Chambre</option>
      <option value="2">Salon gauche</option>
      <option value="3">Salon droit</option>
    </select>
    <input type="hidden" name="color-orange">
    <button type="submit">ORANGE</button>
  </form>


  <form method="post">
    <select name="light">
      <option value="1">Chambre</option>
      <option value="2">Salon gauche</option>
      <option value="3">Salon droit</option>
    </select>
    <input type="hidden" name="color-blue">
    <button type="submit">BLEU </button>
  </form>

  <form method="post">
    <select name="light">
      <option value="1">Chambre</option>
      <option value="2">Salon gauche</option>
      <option value="3">Salon droit</option>
    </select>
    <input type="hidden" name="color-fun">
    <button type="submit">Fun </button>
  </form>

  <form method="post">
    <select name="light">
      <option value="1">Chambre</option>
      <option value="2">Salon gauche</option>
      <option value="3">Salon droit</option>
    </select>
    <input type="hidden" name="turn-off">
    <button type="submit">OFF</button>
  </form>

  <form method="post">
    <select name="light">
      <option value="1">Chambre</option>
      <option value="2">Salon gauche</option>
      <option value="3">Salon droit</option>
    </select>
    <input type="hidden" name="turn-on">
    <button type="submit">ON</button>
  </form>


  <form method="post">
    <select name="light">
      <option value="1">Chambre</option>
      <option value="2">Salon gauche</option>
      <option value="3">Salon droit</option>
    </select>
    <input type="hidden" name="cac-40">
    <button type="submit">CAC 40</button>
  </form>

  <form method="post">
    <input type="hidden" name="zen-salon">
    <button type="submit">Zen Salon</button>
  </form>

  <form method="post">
    <input type="hidden" name="wakeup">
    <button type="submit">Wakeup</button>
  </form>


  <style>


  .comparo{
    text-align: center;
    font-size: 20px;
  }
  </style>







</body>

</html>
<style>
* {
  margin: 0;
  padding: 0;
  font-family: 'Lato', sans-serif;
  font-weight: 300;
}
</style>
