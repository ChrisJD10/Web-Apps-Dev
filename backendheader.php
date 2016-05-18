<?php 
	Session_start();
	if(!isset($_SESSION['Username'])){
		header('Location: Login.php');
	}
?>

<!doctype html>

<html>
	<head>
		<link type="text/css" rel="stylesheet" href="Style.css" />
	</head>
	
	<body>
		<header>
		<nav class="Left">
		<ul>
			<li> <a href="add.php"> Add New Page </a> </li>
			<li> </li>
			<li> <a href="backend.php"> Backend </a> </li>
			<li> </li>
			<li> <a href="logout.php"> Log out </a> </li>
		</ul>
		</nav>
			 