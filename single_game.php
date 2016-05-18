<?php include('header.php');?>

		<main>
		<br />
		
		<?php $mysqli = new mysqli("localhost", "root", "", "ChrisJD3");
					if(mysqli_connect_errno()){
						echo "I cannot connect";		
					}
					else {
						
					$query = "SELECT * from GameInformation WHERE ID = {$_GET['id']}";
					$results = mysqli_query($mysqli, $query);
					
					while($array = mysqli_fetch_array($results)){?>
					
			<h3 class="center"><?php echo $array['Game'];?></h3>
			<br /> <br /> 
			
			 
			
			
			
			<div class="gameinfo"> <img src="<?php echo $array['Img'];?>" width="250" height="250" class="left" alt="<?php echo $array['Game'];?> Image"> 
				<div class="info1"> Released </div> <div class="info2"> <?php echo $array['Date_Released'];?></div> 
				<div class="info1"> Genre </div> <div class="info2"> <?php echo $array['Genre1'].", ".$array['Genre2'].", ".$array['Genre3'];?></div>
				<div class="info1"> Developer </div> <div class="info2"> <?php echo $array['Developer'];?> </div>
				<div class="info1"> Publisher </div> <div class="info2"> <?php echo $array['Publisher'];?> </div>
			</div>
			
			<div class="sum"> 
					<p> <?php echo $array['Summary'];?> </p>
 
					  </div>
					<div class="revside"> <a href="Review.html"> <img class="left" width="200" height="200" src="SubmitRev.png"  alt="Submit Review"> 
					<br /> Click here to submit a review </a> </div>
					<div class="rev"> <br /> <br /> <?php echo $array['Review'];?> </div>
					
					
					<?php }
					
					
					}
					?>
		</main>
		
		<footer class="clear">
			Game logo belongs to the developer/publisher.
		</footer>
	</body>
</html>