<?php

$con = new mysqli("localhost","root","root","EVENT_MGT");

if($con->connect_error){
	die("Connection Error : ".$con->connect_error);
}

?>