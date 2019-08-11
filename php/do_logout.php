<?php 
	session_start();
	
	session_destroy(); //Destroys all of the data associated with the current session. 
	header("Location:login.php");
?>