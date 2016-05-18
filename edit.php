<?php include('backendheader.php');?>


            <div class="container">
            <h2>Edit Game</h2>
            </div>
        </header>
        <main>
            <div class="container">
            <?php if($_POST){
            $mysqli = new mysqli("localhost","root","","ChrisJD3");
            if(mysqli_connect_errno()){	
	            echo "I cannot connect";		
            }else{	
            	$query = "UPDATE GameInformation SET Game = '{$_POST['game']}', Publisher = '{$_POST['publisher']}', Developer = '{$_POST['developer']}', Genre1 = '{$_POST['genre']}', Genre2 = '{$_POST['genre2']}', Genre3 = '{$_POST['genre3']}', Date_Released = '{$_POST['date']}', Game_Rating = '{$_POST['rating']}', Summary = '{$_POST['summary']}', Review = '{$_POST['review']}', Img = '{$_POST['img']}' WHERE ID ={$_POST['id']}";	
				
            	$results = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));	
	       if($results == 1)
        	{echo "Game Updated!";}
            else{ echo "Update Failed";}	
            }} else {?>

            <?php
            $mysqli = new mysqli("localhost","root","","ChrisJD3");
            if(mysqli_connect_errno()){
	            echo "I cannot connect";
            }else{
            	$query = "SELECT * FROM GameInformation WHERE ID ={$_GET['id']}";
	            $results = mysqli_query($mysqli, $query);
	            
            	while($array = mysqli_fetch_array($results)){
	        	$game = $array['Game'];
	        	$publisher = $array['Publisher'];
	        	$developer = $array['Developer'];
	        	$genre = $array['Genre1'];
        		$genre2 = $array['Genre2'];
        		$genre3 = $array['Genre3'];
	        	$date = $array['Date_Released'];
              	$rating = $array['Game_Rating'];
	         	$summary = $array['Summary'];
	        	$review = $array['Review'];
	        	$img = $array['Img'];
            }}
            ?>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<input type="text" name="id"  value="<?php echo $_GET['id'];?>" hidden>
				<div> Game: <input type="text" name="game" placeholder="Game name" value="<?php echo $game;?>" required> </div>
				<br />
				<br />
				<div> Publisher: <input type="text" name="publisher" placeholder="Publisher" value="<?php echo $publisher;?>" required> </div>
				<br />
				<br />
				<div> Developer: <input type="text" name="developer" placeholder="Developer" value="<?php echo $developer;?>" required> </div>
				<br />
				<br />
				<div> Genre: <input type="text" name="genre" placeholder="Genre #1" Size="20" value="<?php echo $genre;?>" required> </div>
				<br />
				<br />
				<div> Genre 2: <input type="text" name="genre2" placeholder="Genre #2" Size="20" value="<?php echo $genre2;?>" > </div>
				<br />
				<br />
				<div> Genre 3: <input type="text" name="genre3" placeholder="Genre #3" Size="20" value="<?php echo $genre3;?>" > </div>
				<br />
				<br />
				<div> Date Released: <input type="text" name="date" placeholder="Date of Release" value="<?php echo $date;?>" required> </div>
				<br />
				<br />
				<div> Game Rating: <br /> <select name="rating">
					<option value="<?php echo $rating;?>">Current: <?php echo $rating;?></option>
					<option value="N/A">N/A</option>
					<option value="1/5">1/5</option>
					<option value="2/5">2/5</option>
					<option value="3/5">3/5</option>
					<option value="4/5">4/5</option>
					<option value="5/5">5/5</option>
				</select> </div>
				<br />
				<br />
				<div> Summary: <textarea name="summary" placeholder="Summary of the game" ><?php echo $summary;?></textarea> </div>
				<br />
				<br />
				<div> Review: <textarea name="review" placeholder="Review of the game"><?php echo $review;?></textarea> </div>
				<br />
				<br />
				<div> Img Location: <input type="text" name="img" placeholder="Image Location" value="<?php echo $img;?>" > </div>
				<br />
				<br />
				<input type="submit" value="Submit Form">
			</form>
			<?php } ?>
        </main>
    </body>
</html>