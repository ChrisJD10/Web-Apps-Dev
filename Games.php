<?php include('header.php');?>

		<main>
		<br />
			<h3 class="center">Games</h3>
			<br /> <br /> 
		<div>Choose a game from the table by clicking on the logo or the name of the game you want to select.</div>
		<br /> <br />
		<!-- Table will list all games we have on the website,
			 Showing the game logo, game name, date released
			 and the amount of reviews it has -->
		<table>
  <tr>
    <th>Logo</th>
    <th>Game</th>
    <th>Date Released</th>
	<th>Game Rating</th>
  </tr>
  
  
  <?php $mysqli = new mysqli("localhost", "root", "", "ChrisJD3");
					if(mysqli_connect_errno()){
						echo "I cannot connect";		
					}
					else {
						
					$query = "SELECT * from GameInformation";
					$results = mysqli_query($mysqli, $query);
					
					while($array = mysqli_fetch_array($results)){?>
						
						<tr>
							<td><a href="single_game.php?id=<?php echo $array['ID'];?>"><img width="150" height="150" src="<?php echo $array['Img'];?>" alt="Game Logo"> </a> </td>
							<td><a href="BulletHeaven2.php"> <?php echo $array['Game'];?> </a> </td>
						<td><?php echo $array['Date_Released'];?></td>
						<td><?php echo $array['Game_Rating'];?></td>
					  </tr>
						
					<?php }
					
					
					}
					?>
  
  
   
    


 
  
</table>
		</main>
		
		<footer class="clear">
		All images belong to thier corresponding game developer
			<!-- In the footer of the page you can put links or 
			legal stuff. -->
		</footer>
	</body>
</html>