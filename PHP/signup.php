<?php

session_start();
include 'dbh.inc.php';

if (isset($_POST['signinSubmit']))
{
	$first = $_POST['first'];
	$last = $_POST['last'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	$sql = "INSERT INTO users (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$pwd')";
	$result = $db->query($sql);
}

header("Location: commentsection.php?signupsuccess");
