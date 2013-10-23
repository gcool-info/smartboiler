<?php

/* Check whether the ajax command was posted. The variable 'status' is either a 0 (the heater is turned off) or 1 (the heater is turned on) */
if (isset($_POST['status'])) {

	/* open the txt file */
	$handle = fopen("boiler_status.txt", "w");

	/* Write the status of the heater in the txt file */
	fwrite($handle, $_POST['status']);

	/* close the txt file */
	fclose($handle);
}

?>
