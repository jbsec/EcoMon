<html>


<?php

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'signup');
		
	$query = mysqli_query($con, 'SELECT * FROM rooms');
	
	echo "<h1> Choose record to edit: </h1>";
	
	echo "<table>
			<tr>
				<th>Room Number/Name</th>
				<th>Desktops</th>
				<th>Lights</th>
				<th>GSM Signal</th>
				<th>WIFI Signal</th>
			</tr>";
			
	while ($row = mysqli_fetch_array($query))
	{
		echo "<tr>
				<td>" . $row['Room'] . "</td>
				<td>" . $row['Desktops'] . "</td>
				<td>" . $row['Lights'] . "</td>
				<td>" . $row['GSMSig'] . "</td>
				<td>" . $row['WIFISig'] . "</td> 
			<td> <A href='###?ID=".$row['Room']." '> Edit  </a> </td>
				<td> <A href='###?ID=".$row['Room']." '>  |  Delete </a> </td> 
			</tr>";
	}
	
	echo "</table>";
	
?>



<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		
</html>		