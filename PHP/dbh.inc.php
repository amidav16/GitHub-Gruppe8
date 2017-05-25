<?php 


$db = new mysqli('localhost', 'root', 'root', 'event-manager');

if(!$db)
{
	die("Connection failed: ".mysqli_connect_error());
}