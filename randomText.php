<?php
//returns random element from the array

function pick_random($array){
  return $array[array_rand($array)];
}


$subjects=array(
  'Elvis',
  ' mama',
  'neigbour\'s dog',
  'dummy programmer'
);

$verbs=array(
  'needs',
  'wants',
  'ate',
  'build'
);

$quantities=array(
  'a',
  'two',
  'three',
  'two dozen',
  'fifty'
);

$adjectives=array(
  "new",
  "large",
  "cute",
  "hot",
  "wicker cool"
);

$objects=array(
  'website',
  'bath',
  'large pizza',
  'new bicycle'
);

$subject=pick_random($subjects);
if($subject !="Elvis" && $subject != "Your mama"){
  $subject_quantity=pick_random($quantities);
  $subject_adjective=pick_random($adjectives);
  $subject=$subject_quantity." ".$subject_adjective." ".$subject;
}

$verb=pick_random($verbs);
$quantity=pick_random($quantities);
$adjective=pick_random($adjectives);
$object=pick_random($objects);

//pluralization
if($quantity!= 'a'){
  $object=$object."s";
}

$sentence=$subject." ".$verb.' '.$quantity." ".$adjective." ".$object;
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

}
  </style>
</head>
<body>
<p><?php echo ucfirst($sentence);   ?></p>

</body>
</html>
