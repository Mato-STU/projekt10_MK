<?php
	$h=1;
  $g=5;
  
  $e=exp($h*$g);
  $l=-log($g-$h);
  
  echo $h+$g;
  echo $g-$h;
  $t = $h*$h - $g/$h*$h; 
  echo $t; 
  $S=array();
  
  print_r($S);
  echo 'Exponential: '.$e.' , Logarithm: '.$l
  
?>