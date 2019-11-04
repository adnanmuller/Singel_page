<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Browser Mirror</title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script type="text/javascript" src="/main.js"></script>
</head>

<body>



<?php

require_once('browser_dectective.php');
$bd=new BrowserDetective();
$bd->detect();

$timestamp=$_SERVER['REQUEST_TIME'];
date_default_timezone_set("America/New_York");
$arrayTime=getdate() ;
print_r($arrayTime);?>

  <div id="main-content">
    <h2>Browser Mirror</h2>
          <p>Platform:<?php echo $bd->platform; ?> </p>
          <p>Browser:<?php echo $bd->browser_name; ?></p>
          <p>Day of the Year: <?php echo $arrayTime['yday'] ?></p>
          <p>Browser Windows width:<span id="width"></span> </p>
          <p>Browser Windows height:<span id="height"></span> </p>

          <p>Remote IP: <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
          <p>User Agent: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
          <p>Referer: <?php echo $_SERVER['HTTP_REFERER']; ?></p>
          <p>Request Time: <?php echo $_SERVER['REQUEST_TIME']; ?></p>
          <p>Request Time Formatted: <?php echo date("D d S F Y G:i:s",$timestamp) ?></p>
          <p>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></p>
          <p>Request Method: <?php echo $_SERVER['REQUEST_METHOD']; ?></p>
          <p>Query String: <?php echo $_SERVER['QUERY_STRING']; ?></p>
          <p>HTTP Accept: <?php echo $_SERVER['HTTP_ACCEPT']; ?></p>

          <p>HTTP Accept Encoding: <?php echo $_SERVER['HTTP_ACCEPT_ENCODING']; ?></p>
          <p>HTTP Accept Language: <?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; ?></p>
          <p>HTTPS?: <?php if(isset($_SERVER['HTTPS'])) {echo 'Yes'; } else {echo 'No';} ?></p>
          <p>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></p>

      <h2>Is it Friday?</h2>
      <?php if (date('l')=='Friday'){
        echo "<p>Yoooo Hoo It is Friday</p><br/>";
      }else{
        $remaining=5-date('N');
        if($remaining<0){
          $remaining+=7;
        }
        echo "<p>Sorry today is not friday</p><br/>";
        echo "Only {$remaining} until Firday!";
      } ?>

      <?php  echo date('N');?><br/>
      <?php  echo date('l');?><br/>
      <?php echo getdate()['year'];?>
  </div>
  <script type="text/javascript">
  </script>

</body>

</html>
