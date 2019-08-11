<?php include('connect.php'); ///Include the content of a PHP file into another PHP file before the server executes 

if(isset($_POST["submit"])){ // The $_POST variable is used to collect values from a form with method="post"
	$email=$_POST["txtemail"];
	$pass=$_POST["txtpass"];
	
	$query=mysqli_query($con,"SELECT email,pass,type FROM register"); //Select queries return a resultset
	while($row=mysqli_fetch_array($query)) //Fetch a result row as an associative array, a numeric array, or both
	{
		$db_email=$row["email"]; //Select returned %d rows
		$db_pass=$row["pass"];
		$db_type=$row["type"];
		
		if($email==$db_email && $pass==$db_pass){
			session_start();
			$_SESSION["email"]=$db_email; //Generates a new session ID
			$_SESSION["type"]=$db_type;
			
			if($_SESSION["type"]=='admin'){
				header("Location:home_admin.php");
			}
			else
				header("Location:home.php");
		}
		else
			echo("Login failed. Please Try again."); //Failure mechanism
	}
}

