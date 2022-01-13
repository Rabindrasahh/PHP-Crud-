<?php
include 'database.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
}



if(isset($_POST['submitnow'])){
  $firstname=$_POST['fname'];
  $lastname=$_POST['lname'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $dob=$_POST['dob'];
  $pincode=$_POST['pin'];

  $update = "UPDATE userregister SET firstname = '".$firstname."', lastname = '".$lastname."', phone = '".$phone."', email = '".$email."', dob = '".$dob."', pincode = '".$pincode."' ";
  $query = mysqli_query($conn,$update);
  if ($query) {
    ?>
    <script>
      alert("Your information is updated");
    </script>
    <?php
  }else{
    ?>
    <script >
          alert("Your information is not updated");
    </script>
    <?php

  }
  header('location:home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
	<div class="container">
  <h2 class="hint-text text-center">Edit Your Information</h2>
  

    <?php 
            $sql=mysqli_query($conn,"SELECT * FROM userregister WHERE id ='".$id."'");
            if ($sql->num_rows>0) {
                while($row = mysqli_fetch_array($sql)){
                    
            ?>  


  <div class="signup-form">
  <form action="" method="POST" enctype="multipart">
    <div class="form-group">
    	<div class="row">
      <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $row['firstname'] ?>" id="firstname" placeholder="First Name" name="fname">
    </div>
    <div class="col-md-6"><input type="text" class="form-control"  value="<?php echo $row['lastname'] ?>" id="lastname" placeholder="Last Name" name="lname">
    </div>
    </div>
    </div>
        <div class="form-group">
    <div class="row">
      <div class="col">
      <input type="number" class="form-control" value="<?php  echo $row['phone']?>" id="phone" placeholder="Phone Number" name="phone">
    </div>
    <div class="col-md-6">
      <input type="email" class="form-control"  value="<?php echo $row['email'] ?>" id="Email" placeholder="Email" name="email">
    </div>
    </div>
</div>
        <div class="form-group">
     <div class="row">
      <div class="col-md-6">
      <input type="date" class="form-control" value="<?php echo $row['dob']  ?>" id="date" placeholder="Date of Birth" name="dob">
    </div>
    <div class="col-md-6">
      <input type="number" class="form-control" value="<?php echo $row['pincode']?>" id="pincode" placeholder="Pincode" name="pin">
    </div>
    </div>
</div>
        <div class="form-group">
    <div class="row">
    <button type="submit" name="submitnow" class="btn btn-primary text-center">Update</button>

</div>
</div>
</form>
</div>

<?php }  } ?>

</div>   
</body>
</html>