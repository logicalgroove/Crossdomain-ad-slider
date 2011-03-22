<?php
$data = '
{
    "slide":[
      {
        "image": "http://www.exclusivelylux.com/ad/images/2-23/luxe-lisa-vogel.jpg",
        "link": "http://www.exclusivelylux.com/swimspot-luxe-lisa-vogel/",
        "title": "LUXE by Lisa Vogel",
        "comment": "Three gorgeous swimsuits from the LUXE collection.",
        "links":
          {
            "some link": "http://example.com",
            "some link 2": "http://example.com",
            "some link 3": "http://example.com"
          }
      },
      {
        "image": "http://www.exclusivelylux.com/ad/img/l2.jpg",
        "link": "http://www.ladylux.com/style/site/article/interview-jesica-milton/",
        "title": "Q&A: Jesica Milton",
        "comment": "The 24 year old designer spoke with LadyLUX about her new designs.",
        "links":
          {
            "some link": "http://example.com",
            "some link 2": "http://example.com",
            "some link 3": "http://example.com",
            "some link 4": "http://example.com"
          }
      },
      {
        "image": "http://www.exclusivelylux.com/ad/images/3-17/oneby.jpg",
        "link": "http://www.tkqlhce.com/click-3578516-10451509?url=http%3A%2F%2Fwww.shopbop.com%2Fci%2F3%2Flb%2FONEby%2Foneby-01.html",
        "title": "ONEby at Shopbop",
        "comment": "Tkees - Collina Strada - Boulee - JJ Winters",
        "links":
          {
            "some link": "http://example.com",
            "some link 2": "http://example.com",
            "some link 3": "http://example.com",
            "some link 4": "http://example.com"
          }
      },
      {
        "image": "http://www.exclusivelylux.com/ad/img/dior-couture-2011.jpg",
        "link": "http://www.ladylux.com/style/site/article/spring-couture-2011-christian-dior/",
        "title": "Christian Dior in Paris",
        "comment": "John Galliano presents Christian Dior’s Spring 2011 Couture.",
        "links":
          {
            "some link": "http://example.com",
            "some link 2": "http://example.com",
            "some link 3": "http://example.com",
            "some link 4": "http://example.com"
          }
      },
       {
        "image": "http://www.exclusivelylux.com/ad/images/2-23/shopbop-first-showing-exclusives.jpg",
        "link": "http://www.exclusivelylux.com/shopbops-buyers-pick-their-pre-spring-favorites/",
        "title": "First Showing at Shopbop",
        "comment": "Buyers Pick Their Pre-Spring Favorites.",
        "links":
          {
            "some link": "http://example.com",
            "some link 2": "http://example.com",
            "some link 3": "http://example.com",
            "some link 4": "http://example.com"
          }
      }
    ]
}';

echo $_GET['callback'] . '(' . $data .');';
?>
