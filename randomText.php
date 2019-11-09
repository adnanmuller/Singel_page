<?php
$fragments=array(
  'ate yor sandwich',
  'wrote you a song',
  'called your cellphone',
  'borrowed your comb'
);

$i=array_rand($fragments);

$sentence='Elvis '.$fragments[$i].'.';
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
