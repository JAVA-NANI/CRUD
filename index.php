<?php
include './header.php'; ?>
<div id="main-content">
    <h2>ALL RECORDS:</h2>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if (mysqli_num_rows($result) > 0) {
    ?>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Class</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['sid']; ?></td>
                    <td><?php echo $row['sname']; ?></td>
                    <td><?php echo $row['saddress']; ?></td>
                    <td><?php echo substr($row['cname'], 0, strpos($row['cname'], " ")); ?></td>
                    <td><?php echo $row['sphone']; ?></td>
                    <td>
                        <a href='update-inline.php?id=<?php echo $row['sid']; ?>'>UPDATE</a>
                        <a href='delete-inline.php?id=<?php echo $row['sid']; ?>'>DELETE</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } else {
        echo "<h1 style='text-align:center; font-size:30px'>NO RECORDS FOUND!</h1>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>

</html>