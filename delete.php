<?php include("db.php"); ?>
<?php include("functions.php");?>
<?php deleteRows();?>
<?php include "inc/header.php";?>



    <h1>Delete</h1>
<form action="delete.php" method="post">
            <input type="text" name="username" placeholder="Username">
            
            <input type="password" name="password" placeholder="Password">
            <select name="id" id="">
              <?php
                showAllData();
              ?>
            </select>
            <input class="button" type="submit" value="delete" name="submit"></input>
</form>

<?php include("inc/footer.php");