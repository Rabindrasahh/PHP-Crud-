<?php
include 'database.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
  <h2 class="hint-text text-center" style="color: darkred;">Your Information</h2>
  <a href="register.php" class="btn btn-primary"> Add New </a>        
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Date of Birth</th>
        <th>Pincode</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

   <?php 
            $sql=mysqli_query($conn,"SELECT * FROM userregister");
            if ($sql->num_rows>0) {
                while($row = mysqli_fetch_array($sql)){
                    
            ?>  
      <tr>
        <td><?php echo $row['firstname']." ".$row['lastname'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['dob'] ?></td>
        <td><?php echo $row['pincode'] ?></td>
        <td>

          <a href="edit.php?id=<?php echo $row['id'] ?>"><i class="fa fa-edit"></i></a>
          <a onclick="return confirm('Are you sure!')" href="delete.php?id=<?php echo $row['id'] ?>"><i class="fa fa-trash"></i></a>

        </td>
      </tr>


  <?php } } ?>

    </tbody>
  </table>
</div>

</body>
</html>