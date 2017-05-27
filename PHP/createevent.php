<?php 

session_start();
include 'dbh.inc.php';

if (isset($_POST['commentSubmit'])) 
	{
		$title = mysqli_escape_string($db, $_POST['title']);
		$description = mysqli_escape_string($db, $_POST['description']);
		$imagePath = mysqli_escape_string($db, $_POST['image_path']);
		$username = mysqli_escape_string($db, $_SESSION['id']);

		$sql = "INSERT INTO events (username, title, description, image_path) VALUES ('$username', '$title', '$description', '$imagePath')";
		$result = $db->query($sql);
		header("Location: femtilappen.php");
	}