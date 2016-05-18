<?php if ($_POST){
	$username = $_POST['Username'];
	$password = $_POST['Password'];
	
	$mysqli= new mysqli("localhost", "root", "", "ChrisJD3");
	if(mysqli_connect_errno()){
		echo "Error connecting to database";
		//Error Message
 }
	else {
		$query = "SELECT * FROM UserData WHERE Username = '{$username}'";
		$results = mysqli_query($mysqli, $query);
		$numberrows = mysqli_num_rows($results);
		If($numberrows == 1){
			while($array = mysqli_fetch_array($results)){
				$database_password = $array['Password'];
				if($database_password == $password){
					session_start();
					$_SESSION['Username'] = $username;
					header('location: backend.php');
					} else {echo "Incorrect Password";}
				}
		}			 else {echo "Username not found";}

} } else {?>

<!doctype html>
<html>
	<head>
	</head>
	
	<body>
		<form method="post" action="<?php echo $_SERVER ['PHP_SELF'];?> ">
		<div> Username: <Input type="text" name="Username" placeholder="Username" required> </div>
		<br /> <br />
		<div> Password: <Input type="password" name="Password" placeholder="Password" required> </div>
		<br /> <br />
		<input type="submit" value="Log in">
		</form>
	</body>
</html>
<?php }?>