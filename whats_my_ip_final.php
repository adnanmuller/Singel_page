<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>What is my ip?</title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <?php

  // returns first forwarded IP match it finds
  function forwarded_ip() {

   $server=array(
      'HTTP_X_FORWARDED_FOR'=>'123.123.123.123.',
    );


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

  <div id="main-content">
    <h2>What is my IP?</h2>
    <p>The request came from:<br/>
    <strong><?php echo $remote_ip ?></strong></p>

    <h2>What is the forwarded IP?</h2>
    <p>The request was forwarded form:<br/>
  <?php if($forwarded_ip !=''){ ?>
          <strong><?php  echo $forwarded_ip ?></strong></p>
  <?php  }else{ ?>
          <strong>No forwarded IP</strong>
<?php }?>
  </div>

</body>

</html>
