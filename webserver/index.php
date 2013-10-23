<html>
	<head>

		<!-- Include the style sheets -->
		<link href="style.css" rel="stylesheet" type="text/css">

		<!-- Include jquery -->
		<script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		<!-- Include the js file -->
		<script type="text/javascript" src="scripts.js"></script>
	</head>
	<body>
		<!-- Add the smartboiler logo -->
		<div id="logo">
			<!-- Check the .txt file to see whether the boiler is turned on. If a zero ie stored then show the red logo. Else show the white logo -->
			<div id="logo-img" class="<?php 	$filename = 'boiler_status.txt'; $handle = fopen($filename, 'r'); $contents = fread($handle, filesize($filename)); fclose($handle); echo ( $contents == 0 ? 'off' : 'on'); ?>" ></div>
			<div id="logo-txt">SmartBoiler</div>
		</div>

	</body>
</html>
