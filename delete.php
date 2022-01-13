<?php
include 'database.php';
if (isset($_GET['id'])) {
   $id = $_GET['id'];
  $delete = mysqli_query($conn,"DELETE FROM userregister where id ='".$id."'");
  if ($delete) {
      header('location:home.php');
  }
}


?>
