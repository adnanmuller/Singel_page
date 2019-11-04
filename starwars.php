<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Is starwars out yet?</title>
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
?>

  <div id="main-content">


      <h2>Is starwars out yet?</h2>
      <?php

      $star_wars_date=$arrayName = array(
        1 => '1999-05-19',
        2 => '2002-05-16',
        3 => '2005-05-19',
        4 => '1977-05-25',
        5 => '1980-05-21',
        6 => '1983-05-25',
        7 => '2015-12-18',
        8 => '2017-05-26',
        9 =>NULL
       );

       $episode=8;
       $relase_date_s=$star_wars_date[$episode];
       $relase_date_t=strtotime($relase_date_s);  //$timestamp
       $relase_date_p=strftime("%B %d, %Y",$relase_date_t);   // pretty string

if(time()>=$relase_date_t){
  echo "Yes Episod #{$episode} was released on {$relase_date_p}";
}else{
    echo "No Episod #{$episode} will be released on {$relase_date_p}";
}
       ?>



  </div>
  <script type="text/javascript">
  </script>

</body>

</html>
