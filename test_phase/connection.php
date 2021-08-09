<?php
	$con = mysqli_connect('localhost','root','','test_phase');
	if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    }
?>