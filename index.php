<html>
<head>
<title>x-posting</title>
<link rel='shortcut icon' href="favicon.ico" type="image/x-icon" />
<style type="text/css">
  body {
    background: #FFF;
	
    margin: 0;
    padding: 0;
	font-family: Arial;

	}
	
  .bind {
    background: #0798d4; /* Old browsers */
background: -moz-linear-gradient(center top,  #0798d4 0%, #0cd389 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#0798d4), color-stop(100%,#0cd389)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(45deg,  #0798d4 0%,#0cd389 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(45deg,  #0798d4 0%,#0cd389 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(45deg,  #0798d4 0%,#0cd389 100%); /* IE10+ */
background: linear-gradient(45deg,  #0798d4 0%,#0cd389 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0798d4', endColorstr='#0cd389',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
 padding:0px;
	width:100%;
	text-align:center;
	box-shadow: inset 0 -6px 0px rgba(0,0,0,0.2);
	}
	.content{
color:#353535;font-weight:normal;text-align:center;
	}
	form{
	margin:0;
	}
	.forms{
	text-align:left;width:270px;margin:auto
	}
	input.forms{
	width:270px;height:32px;margin-bottom:0;
	}
	label.forms{
opacity:0.8;

	-webkit-transition: all 0.4s ease;
 	-moz-transition: all 0.4s ease;
  	-ms-transition: all 0.4s ease;
  	-o-transition: all 0.4s ease;
  	transition: all 0.4s ease;	
	}
	label:hover.forms{
opacity:0.95;


	-webkit-transition: all 0.4s ease;
 	-moz-transition: all 0.4s ease;
  	-ms-transition: all 0.4s ease;
  	-o-transition: all 0.4s ease;
  	transition: all 0.4s ease;	
	}
	input.subm
	{
		text-decoration:none;color:#FFF;background:rgba(10,182,174,0.8);padding:5px 8px 6px 8px;margin:auto;border:0px solid white;border-radius: 4px;font-size:20px;
		
		
		-webkit-transition: all 0.4s ease;
		-moz-transition: all 0.4s ease;
		-ms-transition: all 0.4s ease;
		-o-transition: all 0.4s ease;
		transition: all 0.4s ease;	
		
	}	
	input:hover.subm{
		text-decoration:none;color:#FFF;background:rgba(10,182,174,1);margin:auto;border:0px solid white;border-radius: 4px;font-size:20px;
		cursor:pointer;
		
		
		-webkit-transition: all 0.4s ease;
		-moz-transition: all 0.4s ease;
		-ms-transition: all 0.4s ease;
		-o-transition: all 0.4s ease;
		transition: all 0.4s ease;	
	}
	a.bookm{
		text-decoration:none;color:#FFF;background:rgba(10,182,174,0.8);padding:5px 8px 6px 8px;margin:auto;border:0px solid white;border-radius: 4px;font-size:16px;
		
		
		-webkit-transition: all 0.4s ease;
		-moz-transition: all 0.4s ease;
		-ms-transition: all 0.4s ease;
		-o-transition: all 0.4s ease;
		transition: all 0.4s ease;	
	}	
	a:hover.bookm{
		text-decoration:none;color:#FFF;background:rgba(10,182,174,1);margin:auto;border:0px solid white;border-radius: 4px;font-size:16px;
		cursor:pointer;

		-webkit-transition: all 0.4s ease;
		-moz-transition: all 0.4s ease;
		-ms-transition: all 0.4s ease;
		-o-transition: all 0.4s ease;
		transition: all 0.4s ease;	}
	p.warning{
		color:#000000;
		font-weight:bold;
	}
	p.tiny{
		font-size:10px;
		position:relative;
		top:15px;
		margin:auto;
		opacity:0.7;
	}
	a.tiny{
		text-decoration:none;
		color:#35BEB8;
	}
	div.boxx {
	width:100%;
	padding:10px 0px;
	margin-top:50px;
	background:#FFF;
	
		-webkit-transition: all 0.4s ease;
		-moz-transition: all 0.4s ease;
		-ms-transition: all 0.4s ease;
		-o-transition: all 0.4s ease;
		transition: all 0.4s ease;	
	}
div.boxx:hover {
	background:#FCFCFC;
	
		-webkit-transition: all 0.4s ease;
		-moz-transition: all 0.4s ease;
		-ms-transition: all 0.4s ease;
		-o-transition: all 0.4s ease;
		transition: all 0.4s ease;	
	}
  </style>
</head>
<body>

<div class="bind"><img src="logo.png"></div>

<div class="content">

<div class="boxx"><form name="input" action="link.php" method="get">
<p>
Welcome to x-posting, the best way to cross-post submissions on reddit. In the link bar, put either the comment link or the actual link and select the title later.
</p>
<p class="warning"><?php 


$warn=array("You need to fill all forms","An error ocurred, please try again","This link has not yet been submitted to reddit","<img src='egg.png' alt='No one will ever believe you'>");


$num= $_GET['warning'];
echo $warn[$num];

?></p>
</p><div class="forms"><label class="forms" for="url">Link: </label><input value='<?php echo $_GET['url'];?>' class="forms" type="text" name="url" id="url"><br><label class="forms" for="new">to subreddit: r/</label><input value='<?php echo $_GET['new'];?>'  class="forms"  type="text" name="new" id="new"></div>
<br>
<input class="subm" type="submit" value="Submit">
</form></div><br><div class="end"><div class="boxx">

Transfer this bookmarklet to your bookmarks bar above and use it quickly to x-post a post, simply by opening the link or comments and clicking it.<br>
<br><a class="bookm" href="javascript:window.location='http://x-posting.sodabit.com/book.php?url='+document.URL">x-posting</a></div>

<p class="tiny">by <a class="tiny" href="http://www.reddit.com/user/8bitorangejuice/">8bitorangejuice</a><br>Donate via Bitcoin: 1Knr5GVY3xrwdC9mU6PQBuqNSnQ6CwSWn6</p></div>
</body>