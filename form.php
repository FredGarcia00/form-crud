<?php include "db.php";

include "functions.php";
createRows();
include "inc/header.php";
?>



    <div class="container">
        <h1>Create</h1>

        <form action="form.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input class="button" type="submit" value="create" name="submit"></input>
        </form>

    </div>

    <?php include "inc/footer.php"; ?>