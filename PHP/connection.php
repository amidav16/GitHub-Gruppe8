<?php

use Illuminate\Database\Capsule\Manager as Database;

$port = 8888;
$username = 'root';
$password = 'root';
$name = 'commentsection';

$database = new Database();
$database->addConnection([
	'driver' => 'mysql',
	'host' => 'localhost',
	'port' => $port,
	'username' => $username,
	'password' => $password,
	'database' => $name,
	'collation' => 'utf8_general_ci'	
]);

$database->bootEloquent();