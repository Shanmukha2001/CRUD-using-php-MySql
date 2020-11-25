<?php 
	$conn = mysqli_connect("localhost","root","","firstdb") or die("Unable to connect");
	$quer = "DELETE FROM students WHERE id={$_GET['id']}";
	$result = mysqli_query($conn,$quer);
	header("http://localhost/crudBegins/index.php");
	mysqli_close($conn);
?>