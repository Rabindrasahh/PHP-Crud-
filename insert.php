<?php
include 'database.php';
if(isset($_POST['submit'])){
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$pincode=$_POST['pin'];
	$query="INSERT INTO userregister(firstname,lastname,phone,email,dob,pincode) VALUES('$firstname','$lastname','$phone','$email','$dob','$pincode')";
	$insert=mysqli_query($conn,$query);
	if($insert){
		?>
		<script >
			alert("Your form is submitted");
		</script>
		<?php
	}else{
		?>
<script >
	alert("Your form is not submitted");
</script>
<?php
}

}
?>