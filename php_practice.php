<?php
  
  for($i=0; $i<=10; $i++){
    echo PHP_EOL;
    for($j=0; $j<=$i; $j++){
      
      echo "*";
      
    }
    
  }
  echo PHP_EOL;
  $i =0;
  while($i<=10){
    $i++;
    echo $i.PHP_EOL;
  }
  echo PHP_EOL;
  $i = 0;
  do{
    $i++;
    echo $i.PHP_EOL;
  }while($i<=10);