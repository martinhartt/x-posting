<?php
/* echo file_get_contents('index.php'); */



$value = $_GET["url"];
?>

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
	text-align:left;width:270px;margin:auto
	}
	input.forms{
	width:270px;margin-bottom:10px;
	}
	label.forms{
opacity:0.85;

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
	input.subm{
	text-decoration:none;color:rgba(255,255,255,0.7);background:transparent;margin:auto;border:1px solid white;border-radius: 4px;font-size:15px;padding:2px;
	
	
	-webkit-transition: all 0.4s ease;
 	-moz-transition: all 0.4s ease;
  	-ms-transition: all 0.4s ease;
  	-o-transition: all 0.4s ease;
  	transition: all 0.4s ease;	
	}	
	input:hover.subm{
	text-decoration:none;color:rgba(255,255,255,1);background:transparent;margin:auto;border:1px solid white;border-radius: 4px;
cursor:pointer;
	
	
	-webkit-transition: all 0.4s ease;
 	-moz-transition: all 0.4s ease;
  	-ms-transition: all 0.4s ease;
  	-o-transition: all 0.4s ease;
  	transition: all 0.4s ease;	
	}

  </style>
  
<head>
<title>x-posting

</title>
<style type="text/css">
  td.bar {
    top:0;width:100%;color:white;font-weight:bold;padding:5px;font-family:Arial;
	}
  </style>
  <link rel='shortcut icon' href="favicon.ico" type="image/x-icon" />
</head>
<body>
<table cellpadding="0" cellspacing="0" height="100%" width="100%">
      <tr style="height:1px";>
        <td class="bar">
		<a href="index.php"><img src="logopx.png" alt="x-posting" style="float:right"></a>
		<form name="input" action="link.php" method="get" style="margin:-2px">
			<label for="url" class="forms" >Link: </label><input type="text" class="forms" name="url" id="url" value="<?php echo $value; ?>">
			<label for="new" class="forms" >to subreddit: r/</label><input  class="forms" type="text" name="new" id="new">

			<input class="subm" type="submit" value="Submit">
		</form>
        </td>
      </tr>
      <tr>
        <td>
          <iframe scrolling="auto" sandbox="allow-scripts" id="rf" src="<?php echo $value; ?>" frameborder="0" allowtransparency="true" style="width:100%;height:100%;border:solid 1px #57576B;"></iframe>
        </td>
      </tr>
    </table>
</body>