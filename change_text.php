<?php
function arrayDelete($value, $array){
$key=array_search($value,$array);
  if($key!==false){
    unset($array[$key]);
  }
//unset leaves the index in place
//array_value is like reindexing
  return array_values($array);


}

$style=$arrayName = array('bold','italic','underline','uppercase' );
$styles=$arrayName[rand(0,3)];
$color=array("red","green","blue","violet","grey","black");
$color_count=count($color);
$bg_color=$color[rand(0,$color_count-1)];
$text_colors=arrayDelete($bg_color, $color);
$text_color_count=count($text_colors);
$text_color=$text_colors[rand(0,$text_color_count-1)];
$font_size=(100+rand(1,20)*5);
$aligns=['left','center','right','justify'];
$text_align=$aligns[rand(0,3)];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>You are awsome!</title>
  <style media="screen" type="text/css">
    body{
      margin: 0;
      padding:0;
      background-color:<?php echo $bg_color;  ?>;
      color:<?php echo $text_color; ?>;
      font-size: <?php echo $font_size; ?>px;
      text-align: <?php echo $text_align; ?>;
      <?php
switch ($styles) {
  case 'bold':
    echo "font-weight:bold;";
    break;
  case 'italic':
    echo "font-style:italic;";
    break;
  case 'underline':
    echo "text-decoration:underline;";
    break;
  case 'bold':
    echo "text-transform:uppercase;";
    break;
}
       ?>
    }


  </style>
</head>
<body>
<p>You are awsome!</p>

</body>
</html>
