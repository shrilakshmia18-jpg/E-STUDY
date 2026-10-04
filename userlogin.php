<?php
$uname=$_POST['phno'];
$passwd=$_POST['password'];
$sql="select * from user where phno='$uname' and password='$passwd'";
include 'dbconfig.php';
$result = $conn->query($sql);
session_start();
if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        $namedb=$row['phno'];
        $passdb=$row['password'];
        $_SESSION['username']=$namedb;
        $_SESSION['password']=$passdb;
        echo '<META http-equiv="refresh" content="0;userindex">';
    }
}
else{
    echo '<script>alert("Invalid Username or Password")</script>';
    echo '<META http-equiv="refresh" content="0;userlogout">';
}

?>