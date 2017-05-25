<?php 

require_once 'dbh.inc.php';
if(isset($_GET['type'], $_GET['id']))
{
	$type = $_GET['type'];
	$id = (int)$_GET['id'];

	switch($type)
	{
		case 'event':
			$db->query("
				INSERT INTO event_likes (user, event)
					SELECT {$_SESSION['user_id']}, {$id}
					FROM events
					-- sjekker om artikkelen eksisterer --
					WHERE EXISTS (
						SELECT id
						FROM events
						WHERE id = {$id})
					AND NOT EXISTS (
						SELECT id
						FROM event_likes
						WHERE user = {$_SESSION['user_id']}
						AND event = {$id})
					LIMIT 1
			");
		break;	
	}
}

header('Location: ../PHP/femtilappen.php');