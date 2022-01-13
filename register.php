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
  <h2 class="hint-text text-center">Register Here</h2>
  <div class="signup-form">
  <form action="insert.php" method="POST" enctype="multipart">
    <div class="form-group">
    	<div class="row">
      <div class="col-md-6"><input type="text" class="form-control" id="firstname" placeholder="First Name" name="fname">
    </div>
    <div class="col-md-6"><input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lname">
    </div>
    </div>
    </div>
        <div class="form-group">
    <div class="row">
      <div class="col">
      <input type="number" class="form-control" id="phone" placeholder="Phone Number" name="phone">
    </div>
    <div class="col-md-6">
      <input type="email" class="form-control" id="Email" placeholder="Email" name="email">
    </div>
    </div>
</div>
        <div class="form-group">
     <div class="row">
      <div class="col-md-6">
      <input type="date" class="form-control" id="date" placeholder="Date of Birth" name="dob">
    </div>
    <div class="col-md-6">
      <input type="number" class="form-control" id="pincode" placeholder="Pincode" name="pin">
    </div>
    </div>
</div>
        <div class="form-group">
    <div class="row">
    <button type="submit" name="submit"class="btn btn-primary text-center">ADD</button>

</div>
</div>
</form>
</div>
</div>   
</body>
</html>
