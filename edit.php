<?php include 'header.php'; ?>

<?php 
$conn = mysqli_connect("localhost","root","","firstdb") or die("Unable To Connect");
$query = "SELECT * FROM students WHERE id = '{$_GET['id']}'";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($result)) {
  // echo "<pre>";
  // print_r($row);
  // echo "</pre>";
?>

<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $_GET['id'];  ?>"/>
          <input type="text" name="sname" value="<?php echo $row['name'];?>"/>
      </div>
      <div class="form-group">
          <label>age</label>
          <input type="text" name="sage" value="<?php echo $row['age']; ?>"/>
      </div>
      <div class="form-group">
          <label>Gender</label>
          <?php 
          $query2 = "SELECT * FROM gender;";
          $result2 =  mysqli_query($conn,$query2);
          ?>
          <select name="sgender">
            <?php while ($row2 = mysqli_fetch_assoc($result2)) {          ?>
              <?php if($row['gender'] == $row2['gid']){?>
              <option value="<?php echo $row2['gid']; ?>" <?php echo "selected" ?>>
                <?php echo $row2['gender']; ?>
              </option>
              <?php }
              else{?>
                <option value="<?php echo $row2['gid'];?>">
                <?php echo $row2['gender']; ?>
            <?php } }?>
          </select>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['phone']; ?>"/>
      </div>
      <?php }?>
      <input class="submit" type="submit" value="Update"/>
    </form>
</div>
</div>
</body>
</html>
