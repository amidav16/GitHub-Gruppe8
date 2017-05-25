<?php 

include 'dbh.inc.php';

function setComments($db)
{
	if (isset($_POST['commentSubmit'])) 
	{
		$username = $_POST['username'];
		$title = $_POST['title'];
		$description = $_POST['description'];
		$imagePath = $_POST['image_path'];

		$sql = "INSERT INTO events (username, title, description, image_path) VALUES ('$username', '$title', '$description', '$imagePath')";
		$result = $db->query($sql);
		header("Location: femtilappen.php");
	}
}

function getLogin($db)
{
	if (isset($_POST['loginSubmit'])) 
	{
		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];

		$sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'";
		$result = $db->query($sql);

		if(mysqli_num_rows($result) > 0)
		{
			if($row = $result->fetch_assoc())
			{
				$_SESSION['id']	= (int)$row['id'];
				header("Location: commentsection.php?loginsuccess");
				exit();
			}	
		}
		else
		{	
			header("Location: commentsection.php?loginfailed");
			exit();
		}
	}
}

function getSignup($db)
{
	if (isset($_POST['signinSubmit']))
	{
		$first = $_POST['first'];
		$last = $_POST['last'];
		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];

		$sql = "INSERT INTO users (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$pwd')";
		$result = $db->query($sql);
	}
}

function userLogout()
{
	if (isset($_POST['logoutSubmit'])) 
	{
		session_destroy();
		header("Location: commentsection.php");
		exit();
	}
}