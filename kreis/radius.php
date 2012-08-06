<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kreis - AppTestsss</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
</head>

<body>
<div data-role="header">
	<a href="kreis.php" data-icon="arrow-l">Zur&uuml;ck</a>
	<h1>Kreis</h1>
</div>
<?php
$radius = $_POST["radius"];
$unit = $_POST["unit"];
$squareunit = "$unit <sup>2</sup>";
$pi = pi();
$diameter = $radius * 2;
$circumference = 2 * $pi * $radius;
$area = $pi * $radius *$radius;
?>
<p><b>Folgende Ma&szlig;e sind bei dem Kreis mit dem Radius <?php echo $radius, $unit; ?> vorhanden:</b></p>
<p><b>Durchmesser:</b> <?php
echo $diameter, $unit;
?></p>
<p><b>Umfang: </b><?php 
echo $circumference, $unit;
?>
<p><b>Fl&auml;cheninhalt: </b><?php 
echo $area, $squareunit;
?>
<p><b>Formeln zur Berechnung der Ma&szlig;e eines Kreises bei gegebenem Radius:</b></p>
<li><b>Fl&auml;cheninhalt:</b> Pi * Radius</li>
<li><b>Umfang:</b> 2 * Pi * Radius</li>
<li><b>Durchmesser:</b> 2 * Radius</li>

<br />
<div data-role="footer">
<h1>Design und Umsetzung durch <a href="http://apptestsss.de">AppTestsss.de</a></h1></div>
</body>
</body>
</html>