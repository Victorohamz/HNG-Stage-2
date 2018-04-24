<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Simple Date and Time</title>

<style>
body{
	background: #000000;
	font-family: Gothic A1;
	text-align: center;
}
p {
	
	

padding-top: 100px;

font-family: Gothic A1;
font-style: normal;
font-weight: 900;
line-height: normal;
font-size: 17px;
}

h1{

	font-size: 58px;
}
</style>
</head>



<body>

<h1 style= "color: white"> WELCOME TO HNG INTERNSHIP 4.0</h1>
<div style="color: white; text-align: center; font-size:40px; padding-top: 5%">

<h2><span style="margin-top: 3%">

<?php

date_default_timezone_set("Africa/Lagos");
echo date("h:i:sa");
?>
</span>
</h2>

</div>

<div style="color: white; text-align: center; margin-top: 1%">
<?php
echo date("l jS \of F Y");
?>
<br>
<p style= "text-align: center;"> Make haste while the sun shines.</p>
</div>

</body>
</html>
