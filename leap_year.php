<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Is this Year a leap Year?</title>
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


      <h2>Is this Year a leap Year?</h2>
      <?php
  function is_leap_year($year){
    if ($year % 4 >0) {
      return false;    //2015
    }elseif($year % 100 > 0){
      return true;     //1984
    }elseif($year % 400 > 0){
      return false;    //2100
    }else{
      return true;     //2000
    }
  }


if(isset($_GET['year'])){
  $year=intval($_GET['year']);
}else{
  $year=date('Y');
}

    if(is_leap_year($year)){
      echo "{$year} is a Leap Year!";
    }else{
          echo "{$year} is not a Leap Year!";
    }
       ?>

       <form class="" action="" method="get">
        <p> Enter a year to find out if it is a leap year!</p>
        <input type="text" name="year" value="<?php echo $year; ?>"><br/>
        <input type="submit" name="" value="submit">
       </form>


  </div>
  <script type="text/javascript">
  </script>

</body>

</html>
