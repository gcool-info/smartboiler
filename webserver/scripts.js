/* Load the jquery */
$(document).ready(function() {

    /* When clicking the logo... */
    $( '#logo-img' ).click(function() {

        /* change the logo class so that the red or the white logo appear depending on whether the heater is turned off or on  */
    	$("#logo-img").fadeTo( 500 , 0.0, function() {
    		$( '#logo-img' ).toggleClass('on off');
    		$("#logo-img").fadeTo( 500 , 1.0, function() {});
    	});

        /* Store in the variable curr_status whether the heater is on or off */
    	if ( $('#logo-img').attr('class') == 'on' ) {
    		curr_status = 0;
    	} else {
    		curr_status = 1;
    	}


        /* Use ajax to change the value of the txt file by calling the script in ajax.php */
    	$.ajax({
		  type: "POST",
		  url: "ajax.php",
		  data: { status: curr_status }
		});

	});
});

