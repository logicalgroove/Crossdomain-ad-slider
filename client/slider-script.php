<?php

$url = 'http://www.exclusivelylux.com/ad/data/slider-data.php?callback=?';

function getSliderData($url){
 $ch = curl_init();
 curl_setopt($ch,CURLOPT_URL, $url);
 curl_setopt($ch,CURLOPT_FRESH_CONNECT,TRUE);
 curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
 curl_setopt($ch,CURLOPT_TIMEOUT,10);
 $json=curl_exec($ch);
 if($json==false){
  $m=curl_error(($ch));
  error_log($m);
 }
 curl_close($ch);
 return substr($json, 2, -2);
}

$string=getSliderData($url);
$json_a=json_decode($string,true);

echo '<div class="slider-container"><div class="items">';

foreach($json_a[slide] as $s) {
  $image_tag = '<a href="'. $s[link] .'" target="_blank"><img src="'. $s[image] .'" /></a>';
  $title_tag = '<a class="slider-title" href="'. $s[link] .'" target="_blank">'. $s[title] .'</a>';
  $comment_tag = '<span class="slider-comment">'. $s[comment] .'</span>';
  echo '<div>'.$image_tag.'<span class="slider-overlay">'. $title_tag . $comment_tag .'</span></div>';
}

echo '</div></div><div class="navi"></div>';

?>
