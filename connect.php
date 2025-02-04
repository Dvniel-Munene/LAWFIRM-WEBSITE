<?php

// Database Connection
$obj = new mysqli("localhost","root","","charity_db");

if($obj->connect_errno != 0)
{
	echo $obj->connect_error;
	exit;
}

?>