<?php include("db.php");

function createRows() {
  global $connection;
  if(isset($_POST['submit'])) {
  
    $username = $_POST['username'];
    $password = $_POST['password'];
  
  
    $query = "INSERT INTO users(username,password) ";
    $query .= "VALUES ('$username', '$password')";
  
   $result =  mysqli_query($connection, $query);
  
   if(!$result) {
     die('Query failed' . mysqli_error());
   }
   else {
     echo "User created";
   }
  
  }

}

function readData() {
  global $connection;
  $query = "SELECT * FROM users";

$result =  mysqli_query($connection, $query);

   if(!$result) {
     die('Query failed' . mysqli_error());
   }


   while($row = mysqli_fetch_assoc($result)) {
    ?>
    <pre>
     <?php
     print_r($row);
     ?>
     </pre>
     <?php

 }
}

function showAllData() {
    global $connection;
    $query = "SELECT * FROM users";
    $result =  mysqli_query($connection, $query);
    
       if(!$result) {
         die('Query failed' . mysqli_error());
       }
    
       while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
         echo  "<option value='$id'>$id<option>";
       }
}

function updateTable() {
  if(isset($_POST['submit'])) {
    global $connection;
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";
  
    $result = mysqli_query($connection, $query);
    if(!$result) {
      die("Connection failed" . mysqli_error($connection));
    }
    else {
      echo "User has been updated";
    }
  }
}

function deleteRows() {
  if(isset($_POST['submit'])) {
    global $connection;
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";
  
    $result = mysqli_query($connection, $query);
    if(!$result) {
      die("Connection failed" . mysqli_error($connection));
    }
    else {
      echo "user has been deleted";
    }

  }
}




