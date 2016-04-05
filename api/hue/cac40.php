<?php

/**
*  CAC 40
*/
$todayDate = date('Y-m-d');
$yesterdayDate =  date('Y-m-d',(strtotime ( '-2 day' , strtotime ( $todayDate) ) ));



$datas = json_decode(file_get_contents("https://www.quandl.com/api/v3/datasets/YAHOO/INDEX_FCHI.json?start_date=$yesterdayDate&end_data=$todayDate"));

//print_r($datas->dataset->data);

$cacDateValue = array();

foreach($datas->dataset->data as $cacValue):

  $cacDateValue[$cacValue[0]] = end($cacValue);

endforeach;

print_r($cacDateValue);



if(   $cacDateValue[$yesterdayDate] >   $cacDateValue[$todayDate]){
  echo "<h1>LE CAC EST EN HAUSSE PAR RAPPORT A HIER</h1>";
  echo "Hier->".$cacDateValue[$yesterdayDate];
  echo "Aujourd'hui->".$cacDateValue[$todayDate];
  $light->setHue(26000);
}else{
  echo "<h1>LE CAC EST EN BAISSE PAR RAPPORT A HIER</h1>";
  $light->setHue(65000);
  echo "<div class='comparo'>";
  echo "Hier->".$cacDateValue[$yesterdayDate];
  echo "Aujourd'hui->".$cacDateValue[$todayDate];
  echo "</div>";
}



?>
