<?php include('header.php');?>

		<main>
		<br />
			<h3 class="center">Submit a Review</h3>
			<br /> <br /> 
		<div> If you would like to Submit a review then please fill out the form below.</div>
		<br /> <br />
		<!-- This form will allow users to submit a review to the website for the game they like -->
		<form Method="POST" >
		<div> Your Name: <br /> <input Type="text" Name="name" Size="49" required> </div>
		<div> Game Name: <br /> <select name="Game">
			<option value="BH2">Bullet Heaven 2</option>
			<option value="EBF4">Epic Battle Fantasy 4</option>
			<option value="Smite">Smite</option>
			<option value="Vi">Wings of Vi</option>
			</select> </div>
		<div> Review:  <br /> <textarea Name="comment" Rows="10" Cols="50" required> </textarea> </div>
		<br />
		<div> Do you recommend this game?</div> <br />
		<div> Yes <input type="radio" name="Yes" value="Yes" checked>
			  No <input type="radio" name="No" value="No"> </div>
		<br />
		<input type="Submit" name="send" value="Submit Review">
		</form>

		</main>
		
		<footer class="clear">

		</footer>
	</body>
</html>