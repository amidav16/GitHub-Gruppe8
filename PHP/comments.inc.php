<?php 

function setComments($conn)
{
	if (isset($_POST['commentSubmit'])) {
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$title = $_POST['title'];
		$message = $_POST['message'];
		$likes = $_POST['likes'];

		$sql = "INSERT INTO comments (uid, date, title, message, likes) VALUES ('$uid', '$date', '$title', '$message', '$likes')";
		$result = $conn->query($sql);
	}
}

function getComments($conn)
{
	$sql = "SELECT * FROM comments";
	$result = $conn->query($sql);
	
	while($row = $result->fetch_assoc())
	{
		echo "<div class='comment-box'><p>";
			echo $row['uid']."<br>";
			echo $row['date']."<br>";
			echo $row['title']."<br>";
			echo $row['message']."<br>";
			echo $row['likes'];
		echo "</p></div>";
	}
}