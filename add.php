<?php include('backendheader.php');?>
	
			<div class="container">
			<h2> Add Game </title>
			</div>
		</header>
		
		<main>
			<div class="container">
				<?php  if ($_POST){
				// ("host, "username", password", "database")
					$mysqli = new mysqli("localhost", "root", "", "ChrisJD3");
					if(mysqli_connect_errno()){
						echo "I cannot connect";		
					}
					else {
						
					$query = "INSERT INTO GameInformation VALUES(null, '{$_POST['game']}', 
					'{$_POST['publisher']}', '{$_POST['developer']}', '{$_POST['genre']}', 
					'{$_POST['genre2']}', '{$_POST['genre3']}','{$_POST['date']}', 
					'{$_POST['rating']}', '{$_POST['summary']}', '{$_POST['review']}', 
					'{$_POST['img']}')";
					$results = mysqli_query($mysqli, $query);
					if ($results == 1)
					{ echo "Game information added";}
					else {echo "Game information not added";}
					}}
					?>
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<div> Game: <input type="text" name="game" placeholder="Game name" required> </div>
					<br />
					<br />
					<div> Publisher: <input type="text" name="publisher" placeholder="Publisher" required> </div>
					<br />
					<br />
					<div> Developer: <input type="text" name="developer" placeholder="Developer" required> </div>
					<br />
					<br />
					<div> Genre: <input type="text" name="genre" placeholder="Genre #1" Size="20" required> </div>
					<br />
					<br />
					<div> Genre 2: <input type="text" name="genre2" placeholder="Genre #2" Size="20"> </div>
					<br />
					<br />
					<div> Genre 3: <input type="text" name="genre3" placeholder="Genre #3" Size="20"> </div>
					<br />
					<br />
					<div> Date Released: <input type="text" name="date" placeholder="Date of Release" required> </div>
					<br />
					<br />
					<div> Game Rating: <br /> <select name="rating">
						<option value="N/A">N/A</option>
						<option value="1/5">1/5</option>
						<option value="2/5">2/5</option>
						<option value="3/5">3/5</option>
						<option value="4/5">4/5</option>
						<option value="5/5">5/5</option>
					</select> </div>
					<br />
					<br />
					<div> Summary: <textarea name="summary" placeholder="Summary of the game"></textarea> </div>
					<br />
					<br />
					<div> Review: <textarea name="review" placeholder="Review of the game"></textarea> </div>
					<br />
					<br />
					<div> Img Location: <input type="text" name="img" placeholder="Image Location"> </div>
					<br />
					<br />
					<input type="submit" value="Submit Form">
				</form>
			</div>
		</main>		
	</body>
</html>			