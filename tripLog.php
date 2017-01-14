<!DOCTYPE html>
<!--	Author:	Susan Nagy	
		Date:	9/30/14
		File:	tripLog.php
		Purpose: Chapter 6 Exercise

-->

<html>
<head>
	<title>TRIP LOG</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<?php
		$tripDate = $_POST['tripDate'];
		$miles = $_POST['miles'];		
		$breakfast = $_POST['breakfast'];
		$lunch = $_POST['lunch'];
		$dinner = $_POST['dinner'];		
		$hotel = $_POST['hotel'];
		
		$tripLog = fopen("tripLog.txt","a");
		fputs($tripLog, "\n$tripDate:$miles:$breakfast:$lunch:$dinner:$hotel");
		fclose($tripLog);
		// I added the above three lines to the code that was already here. This code "appends" over to the tripLog.txt. It's basically recording the input from the .html to the .txt file through the .php file logging data input.

		
		
		print ("<h1>TRIP LOG</h1>");
		print ("<p>Your trip on $tripDate has been added to the Trip Log</p>");	
		
		
	?>

</body>
</html>
