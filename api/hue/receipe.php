<?php


if(isset($_POST['zen-salon'])){

  $lightSalonGauche = $client->getLights()[3];
  $lightSalonDroit = $client->getLights()[2];

  $lightSalonGauche->setOn(true);
  $lightSalonDroit->setOn(true);

  $lightSalonGauche->setHue(16000);
  $lightSalonDroit->setHue(16000);
  $lightSalonGauche->setBrightness(160);
  $lightSalonDroit->setBrightness(160);

  //die(); exit();
}




$light = $client->getLights()[$_POST["light"]];

$light->setOn(true);

// $light->setHue(46000);
// $light->setAlert('lselect');

if(isset($_POST['color-green'])){

  $light->setHue(26000);
  // $light->setBrightness(100);
  // sleep(2);
  // $light->setBrightness(1);
  //
  // for($i = 0; $i < 265; $i++):
  //
  //
  //   echo $i;
  //   if($i == 100) $light->setBrightness($i); sleep(3);
  //   if($i == 200) $light->setBrightness($i); sleep(3);
  //
  // endfor;
}



if(isset($_POST['progress'])){

  $light->setBrightness(0);
  $light->setHue(16000);

  for($i = 0; $i < 255; $i++):

    echo $i;
    // // if($i == 100) $light->setBrightness($i); sleep(3);
    // // if($i == 200) $light->setBrightness($i); sleep(3);
    $light->setBrightness($i); sleep(1);

  endfor;
}


if(isset($_POST['color-orange'])){
  $light->setBrightness(150);
  $light->setHue(12000);
}

if(isset($_POST['color-blue'])){

  $light->setHue(46000);
}

if(isset($_POST['color-fun'])){

  $light->setHue(46000);
  sleep(1);
  $light->setHue(16000);
  sleep(2);
  $light->setHue(65000);
  sleep(1);
  $light->setHue(36000);
  sleep(1);
  $light->setHue(16000);
  sleep(2);
  $light->setHue(56000);
  $light->setAlert('lselect');

  $light->setHue(46000);
  sleep(1);
  $light->setHue(16000);
  sleep(2);
  $light->setHue(65000);
  sleep(1);
  $light->setHue(36000);


}


if(isset($_POST['turn-off'])){
  $light->setOn(false);
}

if(isset($_POST['turn-on'])){
  $light->setOn(true);
}


if(isset($_POST['cac-40'])){
  require_once 'cac40.php';
}



// $old_path = getcwd();
// chdir('/Users/Antoine/Google-Drive/localhost/hue/');
$output = shell_exec('./test.sh');
// chdir($old_path);


if(isset($_POST['color-loop'])){
  $light->setEffect('colorloop');
}


?>
