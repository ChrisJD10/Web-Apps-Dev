<!DOCTYPE html>

<html>
	<head>
		<title> C-Reviews </title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="Style.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"> </script>
	<script>
		$( function () {
			$("#colour1").on("click", function (){
				$("header").css("background", "#FFFFFF");
				$("body").css("background", "#FFFFFF");
				$("footer").css("background", "#FFFFFF");
				$("header").css("color", "#000000");
				$("body").css("color", "#000000");
				$("footer").css("color", "#000000");
				$(".links").css("color", "#000000");
				$("a").css("color", "#000000");
			});
			$("#colour2").on("click", function (){
				$("header").css("background", "#80b2ff");
				$("body").css("background", "#80b2ff");
				$("footer").css("background", "#80b2ff");
				$("header").css("color", "#000000");
				$("body").css("color", "#000000");
				$("footer").css("color", "#000000");
				$(".links").css("color", "#000000");
				$("a").css("color", "#000000");
			});
			$("#colour3").on("click", function (){
				$("header").css("background", "#ffffb3");
				$("body").css("background", "#ffffb3");
				$("footer").css("background", "#ffffb3");
				$("header").css("color", "#000000");
				$("body").css("color", "#000000");
				$("footer").css("color", "#000000");
				$(".links").css("color", "#000000");
				$("a").css("color", "#000000");
			});
			$("#colour4").on("click", function (){
				$("header").css("background", "#000000");
				$("body").css("background", "#000000");
				$("footer").css("background", "#000000");
				$("header").css("color", "#FFFFFF");
				$("body").css("color", "#FFFFFF");
				$("footer").css("color", "#FFFFFF");
				$(".links").css("color", "#FFFFFF");
				$("a").css("color", "#FFFFFF");
			});
	

		});
	</script>
		</head>
	
	<body> 

		<header>

			
			<img class="left" width="150" height="150" src="Logo.png" alt="C-Reviews Logo">
			<div class="left">
			<h1 class="left">C-Reviews</h1>
			
			<div style="clear:both"></div>
			<nav class="right">
				<ul>
					<li> <a href="Index.php" class="links"> Home </a> </li>
					<li> <a href="Games.php" class="links"> Games </a> </li>
					<li> <a href="Review.php" class="links"> Submit a Review </a> </li>
					<li> <a href="Contact.php" class="links"> Contact Us </a> </li>
					<li>   </li>
					<li>   </li>
					<li>   </li>
					<li class="colour1" id="colour1"> A </li>
					<li class="colour2" id="colour2"> A </li>
					<li class="colour3" id="colour3"> A </li>
					<li class="colour4" id="colour4"> A </li>
				</ul>
			</nav>
			<div style="clear:both"></div>
			</div>
		</header>