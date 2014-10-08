<?php

require_once("reddit.php");
$reddit = new reddit("relevantsubbot", "MuRH3IIj1Foh");

$info=($reddit->getPageInfo($_GET['url']));
//var_dump($info);
//$response = $reddit->addComment("t3_1jz1r9", "Hey");

$arr= $info->data->children;
$size=count($arr);

if ($size == 0){
$lk = "2";
header( 'Location: http://x-posting.sodabit.com/index.php?warning='.$lk.'&url='.$_GET['url'].'&new='.$_GET['new'] ) ;
}
  
?>

<html>
<head>
<title>x-posting</title>
<link rel='shortcut icon' href="favicon.ico" type="image/x-icon" />
<style type="text/css">
  body {
    background: #0798d4; /* Old browsers */
background: -moz-linear-gradient(45deg,  #0798d4 0%, #0cd389 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#0798d4), color-stop(100%,#0cd389)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(45deg,  #0798d4 0%,#0cd389 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(45deg,  #0798d4 0%,#0cd389 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(45deg,  #0798d4 0%,#0cd389 100%); /* IE10+ */
background: linear-gradient(45deg,  #0798d4 0%,#0cd389 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0798d4', endColorstr='#0cd389',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
	}
	.content{
padding-top:100px;font-family:Arial;color:white;font-weight:bold;text-align:center;
	}
	.forms{
width:600px;margin:auto;
	}
	input.forms{
	margin-bottom:10px;
	}
	label.forms{
opacity:0.7;

	-webkit-transition: all 0.4s ease;
 	-moz-transition: all 0.4s ease;
  	-ms-transition: all 0.4s ease;
  	-o-transition: all 0.4s ease;
  	transition: all 0.4s ease;	
	text-align:left;
	}
	label:hover.forms{
opacity:0.95;


	-webkit-transition: all 0.4s ease;
 	-moz-transition: all 0.4s ease;
  	-ms-transition: all 0.4s ease;
  	-o-transition: all 0.4s ease;
  	transition: all 0.4s ease;	
	
	}
	
	
	input[type="submit"]{
		text-decoration:none;color:rgba(255,255,255,0.8);background:transparent;padding:4px;margin:auto;border:1px solid white;border-radius: 4px;font-size:20px;padding:5px;margin:auto;text-align:center !important;
		
		
		-webkit-transition: all 0.4s ease;
		-moz-transition: all 0.4s ease;
		-ms-transition: all 0.4s ease;
		-o-transition: all 0.4s ease;
		transition: all 0.4s ease;	
	}	
	input[type="submit"]:hover{
		text-decoration:none;color:rgba(255,255,255,1);background:transparent;padding:4px;margin:auto;border:1px solid white;border-radius: 4px;font-size:20px;padding:5px;
	cursor:pointer;
		
		
		-webkit-transition: all 0.4s ease;
		-moz-transition: all 0.4s ease;
		-ms-transition: all 0.4s ease;
		-o-transition: all 0.4s ease;
		transition: all 0.4s ease;	
	}
	a.bookm{
		text-decoration:none;color:rgba(255,255,255,0.8);background:transparent;padding:4px;margin:auto;border:1px solid white;border-radius: 4px;font-size:16px;padding:5px;
		
		
		-webkit-transition: all 0.4s ease;
		-moz-transition: all 0.4s ease;
		-ms-transition: all 0.4s ease;
		-o-transition: all 0.4s ease;
		transition: all 0.4s ease;	
	}	
	a:hover.bookm{
		text-decoration:none;color:rgba(255,255,255,1);background:transparent;padding:4px;margin:auto;border:1px solid white;border-radius: 4px;font-size:16px;padding:5px;
	cursor:pointer;

		-webkit-transition: all 0.4s ease;
		-moz-transition: all 0.4s ease;
		-ms-transition: all 0.4s ease;
		-o-transition: all 0.4s ease;
		transition: all 0.4s ease;	}
  </style>
</head>
<body>
<div class="content"><form name="input" action="link2.php" method="get"><img src="logo.png">
<div class="forms">
<p>It appears the link you submitted has no set title, please decide from one bellow:</p>

<?php 
for($x=0;$x<$size;$x++)
  {
  $r_title= $arr[$x]->data->title;
  $r_subreddit= $arr[$x]->data->subreddit;
  echo "<input class='forms' style='text-align:left !important;display:inline;margin-top:10px;' type='radio' name='title' id='title".$x."' value='".$r_title." [x-post from r/".$r_subreddit."]'><label class='forms' for='title".$x."'>".$r_title." [x-post from r/".$r_subreddit."]</label><br>";
  }
?>
<br><input type="hidden" name="new" value="<?php echo $_GET['new'];?>"><input type="hidden" name="url" value="<?php echo $_GET['url'];?>">
<input class="subm" type="submit" value="Submit">
</form></div>
</body>