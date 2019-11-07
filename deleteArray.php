<?php
//delete value from array using unset
function arrayDelete($value, $array){
$key=array_search($value,$array);
  if($key!==false){
    unset($array[$key]);
  }
//unset leaves the index in place
//array_value is like reindexing
  return array_values($array);


}

$colors=array('red','green','blue','yellow');
$color_count=count($colors);

echo "-----------------<br />";
echo "Original colors:<br/>";
echo "<pre>";
print_r($colors);
echo "<pre>";

 //pick bakgroundcolor
 $bg_color=$colors[rand(0,$color_count-1)];
 echo "Background color: {$bg_color}<br/>";

 //need to ensure that text color is not the same as background colors
 $text_color=arrayDelete($bg_color, $colors);

 echo "-----------------<br />";
 echo "Text colors:<br/>";
 echo "<pre>";
 print_r($text_color);
 echo "<pre>";







 ?>
