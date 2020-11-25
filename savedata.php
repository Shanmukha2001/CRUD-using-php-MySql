<?php
$conn = mysqli_connect("localhost","root","","firstdb") or die("Unable to Connect to Server");
$query = "INSERT INTO students(name,age,gender,phone) VALUES ('{$_POST['sname']}','{$_POST['sage']}','{$_POST['sgender']}','{$_POST['sphone']}')";

$result = mysqli_query($conn,$query);

header("Location: http://localhost/crudBegins/index.php");

mysqli_close($conn);

?>