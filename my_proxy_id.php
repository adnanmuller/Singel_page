<?php

// returns first forwarded IP match it finds
function forwarded_ip() {
<<<<<<< HEAD
=======

>>>>>>> 0ae5dc33ce70359fc85ad2b33eff8c4c1291288c

  $server=array(
    'HTTP_X_FORWARDED_FOR'=>'123.123.123.123',
  );
<<<<<<< HEAD
=======

>>>>>>> 0ae5dc33ce70359fc85ad2b33eff8c4c1291288c
  $keys = array(
    'HTTP_X_FORWARDED_FOR',
    'HTTP_X_FORWARDED',
    'HTTP_FORWARDED_FOR',
    'HTTP_FORWARDED',
    'HTTP_CLIENT_IP',
    'HTTP_X_CLUSTER_CLIENT_IP',
  );

  foreach($keys as $key) {
    if(isset($server[$key])) {
      $ip_array = explode(',', $server[$key]);
      foreach($ip_array as $ip) {
        $ip = trim($ip);
        if(validateIp($ip)){
          return $ip;
        }

      }
    }
  }
  return '';
}

function validateIp($ip){
  if(filter_var($ip , FILTER_VALIDATE_IP , FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) ===false ){
    return false;
  }else{
    return true;
  }
}

$remote_ip = $_SERVER['REMOTE_ADDR'];
$forwarded_ip = forwarded_ip();

?>

Remote IP Address: <?php echo $remote_ip; ?><br />
<br />

<?php if($forwarded_ip != '') { ?>
  Forwarded For: <?php echo $forwarded_ip; ?><br />
  <br />
<?php }else{
  echo "You have no forwarded IP adresse!";
} ?>

<br />
<?php
if(validateIp('123.123.123.123')===true){
  echo "IP addres is validated";
}else{
  echo "IP address is NOT validated";
}
 ?>
