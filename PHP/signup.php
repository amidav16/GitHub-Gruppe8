<?php

session_start();
include 'dbh.inc.php';

if (isset($_POST['signinSubmit']))
{
	$first = mysqli_escape_string($db, $_POST['first']);
	$last = mysqli_escape_string($db, $_POST['last']);
	$uid = mysqli_escape_string($db, $_POST['uid']);
	$pwd = mysqli_escape_string($db, $_POST['pwd']);

	$sql = "INSERT INTO users (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$pwd')";
	$result = $db->query($sql);
}

header("Location: commentsection.php?signupsuccess");
