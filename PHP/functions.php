<?php 

include 'dbh.inc.php';

function getQuery()
{
	$query = "
      SELECT 
      events.id, 
      events.title, 
      events.description, 
      events.image_path,
      users.uid,
      COUNT(event_likes.id) AS likes

      FROM events

      LEFT JOIN event_likes
      ON events.id = event_likes.event

      LEFT JOIN users 
      ON events.username = users.id

      GROUP BY events.id
    ";

    return $query;	
}