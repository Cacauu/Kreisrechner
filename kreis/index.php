<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Kreisrechner - AppTestsss</title>
	<link rel="apple-touch-icon" href="Pi_icon.png" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
</head>

<body>
	<div data-role="header"><h1>Kreise brechnen</h1></div> <!-- Header -->
	<p><b>Berechnung des Umfangs und des Fl&auml;cheninhalts</b></p> <!-- Überschrift -->
	<p>Bei gegebenem <b>Radius:</b></p> <!-- Berechnungen bei gegebenem Radius -->
	<form data-theme="b" action="radius.php" method="post"> <!-- Start der Form -->
		<input data-role="fieldcontain" name="radius" type="number"/></div> <!-- Feld zur Eingabe des Radius -->
		<select   name="unit"> <!-- Dropdowm-Menü zur Auswahl des Maßes -->
			<option value="mm">mm</option>
			<option value="cm">cm</option>
			<option value="m">m</option>
			<option value="km">km</option>
			<option value="ft">ft</option>
			<option value="mi">mi</option>
		</select>
		<input data-theme="b" value="Berechnen" type="submit"/>
		<input data-theme="a" type="reset" value="Zur&uuml;cksetzen"/>
	</form> <!-- Ende der Form -->

	<p>Bei gegebenem <b>Durchmesser:</b> <!-- Berechnung bei gegebenem Durchmesser -->
	<form action="diameter.php" method="post"> <!-- Beginn der Form -->
		<input data-role="fieldcontain"  name="diameter" type="number"/> <!-- Feld zur Eingabe des Durchmessers -->
		<select  name="unit"> <!-- Dropdowm-Menü zur Auswahl des Maßes -->
			<option value="mm">mm</option>
			<option value="cm">cm</option>
			<option value="m">m</option>
			<option value="km">km</option>
			<option value="ft">ft</option>
			<option value="mi">mi</option>
		</select>
		<input data-theme="b" value="Berechnen" type="submit"/>
		<input data-theme="a" type="reset" value="Zur&uuml;cksetzen"/>
	</form></p> <!-- Ende der Form -->
    
	<a href="share.html" data-role="button" data-rel="dialog">Weitersagen</a> <!-- Integration verschiedener Sharing-Links -->
	<div data-role="footer"> <!-- Footer -->
		<h1><a href="" target="blank">Fork on GitHub</a></h1>
	</div> <!-- Ende des Footers -->
</body>
</html>