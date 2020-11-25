<?php

$id = $_POST['sid'];
$name = $_POST['sname'];
$age = $_POST['sage'];
$gender = $_POST['sgender'];
$phone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","firstdb") or die("Unable to Connect");
$query = "UPDATE students SET name='{$name}',age='{$age}',gender='{$gender}',phone='{$phone}' WHERE id='{$id}'";
$result = mysqli_query($conn,$query) or die("Unable to fetch Data");

header("Location: http://localhost/crudBegins/index.php");

mysqli_close($conn);
?>