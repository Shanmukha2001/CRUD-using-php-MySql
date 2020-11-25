<?php include 'header.php'; ?>
<?php

if (isset($_POST['sid'])) {
	$conn = mysqli_connect("localhost","root","","firstdb") or die("Unable to connect");
	$quer = "DELETE FROM students WHERE id = {$_POST['sid']}";
	$result = mysqli_query($conn,$quer);
	header("http://Localhost/crudBegins/index.php");
	mysqli_close();
}
?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="$_SERVER['PHP_SELF']"method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
