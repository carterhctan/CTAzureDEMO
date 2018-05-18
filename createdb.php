<?php
//including the database connection file
include_once("config.php");

$result = mysqli_query($mysqli, "CREATE TABLE `TMessage` (`id` int(11) NOT NULL auto_increment,	`sender` varchar(40) NOT NULL, `msg` varchar(255) NOT NULL, PRIMARY KEY  (`id`) )");
?>

<html>
<head>	
	<title>Create DB</title>
</head>

<body>
<a href="index.php">Database created, go here</a><br/><br/>
</body>
</html>
