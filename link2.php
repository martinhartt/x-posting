<?php
// Getting new sub

$newsub=$_GET["new"];
$url=$_GET["url"];
$title=$_GET["title"];
$urltitle=urlencode($title);
$ok="url";

$link= "http://www.reddit.com/r/".$newsub."/submit?title=".$urltitle."&".$ok."=".$url;



header( 'Location: '.$link ) ;





?>
