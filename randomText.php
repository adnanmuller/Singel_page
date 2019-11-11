<?php
//returns random element from the array

function pick_random($array){
  return $array[array_rand($array)];
}


$subjects=array(
  'Elvis',
  'Your mamam',
  'Your neigbour\'s dog',
  'A dummy programmer'
);

$verbs=array(
  'needs',
  'wants',
  'ate',
  'build'
);

$objects=array(
  'a website',
  'a bath',
  'a large pizza',
  'a new bicycle'
);

//$i=array_rand($fragments);

$sentence=pick_random($subjects)." ".pick_random($verbs).' '.pick_random($objects);
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>You are awsome!</title>
  <style media="screen" type="text/css">
body{
  margin:5px;
  padding:0;
  text-align: left;
  text-transform: uppercase;
}
  </style>
</head>
<body>
<p><?php echo $sentence   ?></p>

</body>
</html>
