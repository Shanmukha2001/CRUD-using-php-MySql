<?php include 'header.php'; ?>
<div id="main-content">
    <?php 
        $conn = mysqli_connect("localhost","root","","firstdb") or die("NOt Connected");

        $myqu = "SELECT * FROM students s JOIN gender g ON s.gender = g.gid";

        $result = mysqli_query($conn,$myqu) or die("Error while fetching query");

        // echo "<pre>";
        // print_r($result);
        // echo "</pre>";

        if (mysqli_num_rows($result) > 0) {
            // while ($row = mysqli_fetch_assoc($result)) {
                // echo "<pre>";
                // print_r($row);
                // echo "</pre>";
                // echo $row['id'] . " ";
                // echo $row['name'] . " ";
                // echo $row['gender'] . " ";
                // echo $row['age'] . " ";
                // echo "<br>";
    ?>
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php     while ($row = mysqli_fetch_assoc($result)) { 
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['age'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row["id"]?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row["id"]?>'>Delete</a>
                </td>
            </tr>            
        <?php }}?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>
