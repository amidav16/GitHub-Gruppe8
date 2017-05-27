<?php

session_start();
include 'dbh.inc.php';

	if (isset($_POST['loginSubmit'])) 
	{
		$uid = mysqli_escape_string($db, $_POST['uid']);
		$pwd = mysqli_escape_string($db, $_POST['pwd']);

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
