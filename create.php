<?php include 'header.php'; ?>
    <div id="main-content">
        <h1 style="text-align: center; font-size: 30px;">CREATE RECORD</h1>
        <form class="post-form" action="create-data.php" method="post" autocomplete="off">
            <div class="form-group">
                <label class="label">NAME</label>
                <input type="text" name="sname" spellcheck="false" maxlength="30" required/>
            </div>
            <div class="form-group">
                <label class="label">ADDRESS</label>
                <input type="text" name="saddress" spellcheck="false" maxlength="100" required/>
            </div>
            <div class="form-group">
                <label class="label">CLASS</label>
                <select name="class" required spellcheck="false">
                    <option value="" selected disabled>Select Class</option>
                    <?php
                    include 'config.php';

                    $sql = "SELECT * FROM studentclass";
                    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></option>

                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label class="label">PHONE</label>
                <input type="text" name="sphone" spellcheck="false" pattern="[6-9]{1}[0-9]{9}" maxlength="10">
            </div>
            <input class="submit" type="submit" value="Save" />
        </form>
    </div>
</body>
</html>