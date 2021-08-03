<?php
	$con = mysqli_connect('localhost','root','','online_doctor_search_and_appointment_system');
	if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    }
?>