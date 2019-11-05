<?php
$color=array("red","green","blue","violet","grey","black");
$color_count=count($color);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Random color</title>
  <style media="screen" type="text/css">
    body{
      margin: 0;
      padding:0;
      background-color:<?php echo $color[rand(0,$color_count-1)];  ?>;
    }
  </style>
</head>
<body>

</body>
</html>
