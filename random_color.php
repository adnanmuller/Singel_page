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

    .area{
      padding: 0;
      margin: 0;
      float: left;
      width:10px;
      height:10px;
    }
    #area1{
      background-color:<?php echo $color[rand(0,$color_count-1)]?>;
    }
  </style>
</head>
<body>

  <div class="area" id="area1"></div>
    <div class="area" id="area2" style="background:<?php echo $color[rand(0,$color_count-1)];?>"></div>

    <?php
    $square=10000;
for($i=0;$i<$square;$i++){
echo "<div class=\"area\"  style=\"background:{$color[rand(0,$color_count-1)]}\"></div>";
}
      ?>
</body>
</html>
