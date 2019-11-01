

Your IP adress is: <?php echo $_SERVER['REMOTE_ADDR'];


$ip=['1.4.45,45.58.58,47.58.69','4.5.8.9','4.7.4'];
echo "<br>";
print_r($ip);
foreach ($ip as $value) {

  echo "<br>{$value}";
}


foreach ($ip as $value2) {
  $arrayEx=explode(',',$value2);
//  echo "<br>{$value2}";
  }

  print_r($arrayEx);

$test='f,rrrrrrr,ggggg,ttttt';
$test2=trim($test);
echo $test2;
//print_r(explode(',',$test));

function test($variable){
foreach ($variable as $value) {
  return $value;
}
}

$test3=test($ip);
echo $test3;
 ?>
