<?php

require 'src/Wemo/Models/Device.php';
require 'src/Wemo/Models/Outlet.php';



$wemo = new \wemo\models\Outlet("192.168.0.21");

if(isset($_POST)){
  $params = json_decode(file_get_contents('php://input'),true);
  if (isset($params['wemo-action'])){

    ($wemo->getIson()) ?  $wemo->setIsOn(false) :  $wemo->setIsOn(true);

    echo "ope sur WEMO -> ".$params['wemo-action'];

  }


}
