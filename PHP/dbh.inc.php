<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'commentsection');

if (!$conn) 
{
	die("Connection failed: ".mysqli_connect_error());
}