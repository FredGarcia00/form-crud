<?php include("db.php"); ?>
<?php include("functions.php");?>
<?php updateTable();?>
<?php include "inc/header.php";?>


    <h1>Update</h1>
<form action="update.php" method="post">
            <input type="text" name="username" placeholder="Username">
            
            <input type="password" name="password" placeholder="Password">
            <select name="id" id="">
              <?php
                showAllData();
              ?>
            </select>
            <input class="button" type="submit" value="update" name="submit"></input>
</form>

<?php include("inc/footer.php");