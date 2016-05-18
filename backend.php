 <?php include ('backendheader.php');?>
<ul>
<?php $mysqli = new mysqli("localhost", "root", "", "ChrisJD3");
					if(mysqli_connect_errno()){
						echo "I cannot connect";		
					}
					else {
						
					$query = "SELECT * from GameInformation";
					$results = mysqli_query($mysqli, $query);
					
					while($array = mysqli_fetch_array($results)){
						
						echo "<li>".$array['Game'];
						echo "&nbsp; &nbsp; &nbsp;";
						echo "<a href='edit.php?id=".$array['ID']."'>Edit Game</a>";
						echo "&nbsp; &nbsp; &nbsp;";
						echo "<a href='delete.php?id=".$array['ID']."'>Delete Game</a></li>";
						echo "<br />";
						
					}
					
					
					}
					?>
					</ul>
	</body>
</html>