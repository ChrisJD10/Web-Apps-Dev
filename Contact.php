<?php include('header.php');?>

		<main>
		<br />
			<h3 class="center">Contact Us</h3>
			<br /> <br /> 
		<div> 
		If you would like to contact C-Reviews via E-Mail then please fill out the form below.
		</div>
		<br /> <br />
		<!-- This form allows the users to email me about the website -->
		<form Method="POST" Action="mailto:Dei15258906@hull-college.ac.uk">
		<div> Your Name: <br /> <input Type="text" Name="name" Size="49" required> </div> 
		<div> Your Email Address: <br /> <input Type="email" Name="email" Size="49" required> </div>
		<div> Message:  <br /> <textarea Name="comment" Rows="10" Cols="50" required> </textarea> </div>
		<input type="Submit" name="send" value="Submit Email">
		<input type="reset" name="reset" value="Reset Form">
		</form>

		
		</main>
		
		<footer class="clear">

		</footer>
	</body>
</html>