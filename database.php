<?php
session_start();
$server='localhost';
$username='root';
$password='';
$db='userregister';
$conn=mysqli_connect($server,$username,$password,$db);
/*if($conn){
    echo("Connection is sucessful");
} else{
    ?>
    <script>
        alert("Connection is not sucessful");
    </script>
    <?php
}*/

?>