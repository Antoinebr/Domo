<?php

require 'src/Wemo/Models/Device.php';
require 'src/Wemo/Models/Outlet.php';


if(isset($_POST)){
  $params = json_decode(file_get_contents('php://input'),true);
  if (isset($params['wemo-action'])){

    $wemo = new \wemo\models\Outlet("192.168.0.21");
    if( $params['wemo-action'] == "on" ) $wemo->setIsOn(true);
    if( $params['wemo-action'] == "off" ) $wemo->setIsOn(false);

    echo "ope sur WEMO -> ".$params['wemo-action'];

  }else{
    echo "WemoAction n'est pas def";
  }

}
