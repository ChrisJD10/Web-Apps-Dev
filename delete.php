<?php include('backendheader.php');?>
<body>
<header>
<h2>Delete Record</h2>
</header>
<?php 
	if ($_GET['id']){
	// get the id from the URL
		$ID = $_GET['id'];
		$mysqli = new mysqli("localhost", "root", "", "ChrisJD3");
			if (mysqli_connect_errno()){
			echo "I cannot connect";
										}
			else{
	// build our delete query, inputting the ID from the URL
	
    $query = "DELETE FROM GameInformation WHERE ID ='{$ID}'";
	
    $results = mysqli_query($mysqli, $query);  
	
    if($results == 1)
        	{echo "Game Deleted!";}
            else{ echo "Delete Failed";}
    echo '<br />';
    echo '<a href="backend.php">Return to backend</a>';			   
	} 
}
?>
</body>
</html>