<?php

$conn = mysqli_connect('localhost','Anjali','test123','pizza_place');

	if(!$conn)
		echo 'Connection error: ' . mysqli_connect_error();

?>