<?php 

session_start();
include 'dbh.inc.php';

if (isset($_POST['logoutSubmit'])) 
	{
		session_destroy();
		header("Location: femtilappen.php");
		exit();
	}