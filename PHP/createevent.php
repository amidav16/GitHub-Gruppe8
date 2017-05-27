<?php 

session_start();
include 'dbh.inc.php';

if (isset($_POST['commentSubmit'])) 
	{
		$title = $_POST['title'];
		$description = $_POST['description'];
		$imagePath = $_POST['image_path'];
		$username = $_SESSION['id'];

		$sql = "INSERT INTO events (username, title, description, image_path) VALUES ('$username', '$title', '$description', '$imagePath')";
		$result = $db->query($sql);
		header("Location: femtilappen.php");
	}