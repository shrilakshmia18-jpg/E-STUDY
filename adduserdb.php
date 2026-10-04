<?php
include 'dbconfig.php';
if(isset($_POST['adduser']))
{
$name=$_POST['name'];
$phno=$_POST['phno'];
$password=$_POST['password'];
$repass=$_POST['repass'];
$address=$_POST['address'];
if($password==$repass)
{
$sql="INSERT INTO `user` (`phno`, `name`, `password`, `address`) VALUES ('$phno', '$name', '$password', '$address');";
if(mysqli_query($conn,$sql)){
    echo '<script>alert("User Inserted Successfully")</script>';
    echo '<META http-equiv="refresh" content="0;index">';
}
else
{
    echo '<script>alert("DB Error")</script>';
    echo '<META http-equiv="refresh" content="0;register">';
}
}
else{
      echo '<script>alert("Password Mismatch")</script>';
    echo '<META http-equiv="refresh" content="0;register">';
}
}
else
{
     echo '<META http-equiv="refresh" content="0;index">';
}
?>

