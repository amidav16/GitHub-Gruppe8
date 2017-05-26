<?php 

$servername = "tek.westerdals.no";
$username = "hamesp16_gruppe8";
$password = "fzDo8BOb#Sso";
$database = "hamesp16_event_manager";
$port = "3306";

$db = new mysqli($servername, $username, $password, $database, $port);
 
if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}
?>