<?php 

	$conn = new mysqli('localhost','root','','perx');

	if(!$conn->connect_error){

		//echo 'Connected Successfully';

	} else {

		echo 'Faled to connect to the database';

	}

?>