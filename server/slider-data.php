<?php
header("content-type: application/json");
$data = '
{
  "slides":{
    "slide":[
      {
        "image": "http://www.exclusivelylux.com/ad/img/l1.jpg",
        "link": "http://www.ladylux.com",
        "title": "LadyLUX",
        "comment": "This is a comment 1"
      },
      {
        "image": "http://www.exclusivelylux.com/ad/img/l2.jpg",
        "link": "http://www.ladylux.com",
        "title": "LadyLUX",
        "comment": "This is a comment 2"
      },
      {
        "image": "http://www.exclusivelylux.com/ad/img/l3.jpg",
        "link": "http://www.ladylux.com",
        "title": "LadyLUX",
        "comment": "This is a comment 3"
      }
    ]
  }
}';

echo $_GET['callback'] . '(' . $data .');';
?>
