<?php include 'header.php'; ?>
<?php
$conn = mysqli_connect("localhost","root","","firstdb");
?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
<?php
if (isset($_POST['sid'])) {
    $query = "SELECT * FROM students WHERE id='{$_POST['sid']}'";
    $result = mysqli_query($conn,$query) or die("Unable to run query");
    if (mysqli_num_rows($result)>0) {
        while ($row= mysqli_fetch_assoc($result)) {
?>
<form class="post-form" action="updatedata.php" method="post">
    <div class="form-group">
        <?php ?>
        <label for="">Name</label>
        <input type="hidden" name="sid"  value="<?php echo $row['id'] ?>" />
        <input type="text" name="sname" value="<?php echo $row['name'] ?>" />
    </div>
    <div class="form-group">
        <label>Age</label>
        <input type="text" name="sage" value="<?php echo $row['age'] ?>" />
    </div>
    <div class="form-group">
    <label>Gender</label>
    <select name="sgender">
        <?php 
        $query2 = "SELECT * FROM gender;";
        $result2 = mysqli_query($conn,$query2);
        while ($row2 = mysqli_fetch_assoc($result2)) {
            if ($row2['gid'] == $row['gender']) {
        ?>
        <option value="<?php echo $row2['gid'] ?>" <?php echo 'selected' ?>>
            <?php echo  $row2['gender'] ?>
        </option>
    <?php }
    else{
        ?>
        <option value="<?php echo $row2['gid'] ?>" >
            <?php echo  $row2['gender'] ?>
        </option>
        <?php
    }
} ?>
    </select>
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="text" name="sphone" value="<?php echo $row['phone'] ?>" />
    </div>
<input class="submit" type="submit" value="Update"  />
</form>
<?php }   
    }
} ?>
</div>
</div>
</body>
</html>