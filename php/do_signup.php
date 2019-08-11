<?php 
	include 'connect.php'; //Include the content of a PHP file into another PHP file before the server executes 
?>

<?php 

	if(isset($_POST["submit"])) //The $_POST variable is used to collect values from a form with method="post"
	{
		$email=$_POST["txtemail"];
		$pass=$_POST["txtpass"];
     
		$query=mysqli_query($con,"INSERT INTO register (email,pass) VALUES ('$email','$pass')");
		
	if($query){
		header("Location:login.php");
		
	}
	
	else
	{
		echo"fail query"; //Failure mechanism
	}
	
	}
?>