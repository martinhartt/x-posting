<?php

$file = fopen("adresslog.txt","a");
$logg=" ".$_GET['url']. " [". $_GET['new']."] \n";
fwrite($file,$logg);
fclose($file);




if (($_GET['url'] === '') || ($_GET['new'] === ''))

{

$lk="0";
header( 'Location: http://x-posting.sodabit.com/index.php?warning='.$lk.'&url='.$_GET['url'].'&new='.$_GET['new'] ) ;
}else{

/* echo file_get_contents('index.php'); */


require_once("reddit.php");
$reddit = new reddit("relevantsubbot", "MuRH3IIj1Foh");

// Getting new sub

$newsub=$_GET["new"];


// Getting link url

/// Comment url


$value = $_GET["url"];


$pos = strpos($value, 'reddit.com/r/');
$pos2 = strpos($value, '/comments/');

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
if (($pos !== false)&&($pos2 !== false)) {
 

$test= strstr($value,'r/');
  
  $response = $reddit->getRawJSON($test);
   $test= $response[0]->data->children;
  
  $r_title= $test[0]->data->title;
  $r_subreddit= $test[0]->data->subreddit;
  $r_selftext= $test[0]->data->selftext;
 $r_url= $test[0]->data->url;

$selftext=htmlentities(urlencode($r_selftext));

///



$title=$r_title." [x-post from r/".$r_subreddit."]";
$urltitle=urlencode($title);

if($r_selftext !== '') {
$value=$selftext;
$ok="text";

} else{
$value=$r_url;
$ok="url";

}


// ERROR TEST
if (($newsub !== '') && ($urltitle !== '') && ($ok !== '') && ($value !== '')) {


$link= "http://www.reddit.com/r/".$newsub."/submit?title=".$urltitle."&".$ok."=".$value;



header( 'Location: '.$link ) ;

} else {
$lk2 ="1";
header( 'Location: http://x-posting.sodabit.com/index.php?warning='.$lk2.'&url='.$_GET['url'].'&new='.$_GET['new'] ) ;
}

} else { 

$link= "choose.php?url=".$_GET['url']."&new=".$_GET['new'];

header( 'Location: '.$link ) ;


}

// OUTPUT
}



?>
