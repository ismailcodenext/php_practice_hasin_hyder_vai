<?php
  $n=6;
  for($i =$n, $fectorial=1; $i>1; $i--){
    // $fectorial = $fectorial * $i;
    $fectorial*=$i;
  }
  printf("The Fectoril of %d is %d", $n, $fectorial);