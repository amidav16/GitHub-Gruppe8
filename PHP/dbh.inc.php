<?php 

$db = new mysqli('tek.westerdals.no', 'hamesp16_gruppe8', '2H3;uG[(3W[O', 'hamesp16_event_manager', '3306');

if(!$db)
{
	die("Connection failed: ".mysqli_connect_error());
}