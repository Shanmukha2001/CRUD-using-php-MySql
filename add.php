<?php include 'header.php'; ?>
<?php 
$conn = mysqli_connect("localhost","root","","firstdb") or die("Unable to connect");
$query = "SELECT * FROM gender ";
$result = mysqli_query($conn,$query);   
?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="text" name="sage" />
        </div>
        <div class="form-group">
            <label>Gender</label>
            <select name="sgender">
                <option value="" selected disabled>Select Gender</option>
                <?php while($row = mysqli_fetch_assoc($result) ){?>
                <option value=<?php echo $row['gid'];?> ><?php echo $row['gender'];?></option>
                <?php }?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
