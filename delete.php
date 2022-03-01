<?php include 'header.php'; ?>

<?php
if (isset($_POST['deletebtn'])) {

    include "config.php";
    $stu_id = $_POST['sid'];

    $sql = "DELETE FROM student WHERE sid = {$stu_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    header("Location: index.php");

    mysqli_close($conn);
}
?>
<div id="main-content">
    <h1 style="text-align: center; font-size: 30px;">DELETE RECORD</h1>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">
        <div class="form-group">
            <label class="label">ID</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</body>
</html>
