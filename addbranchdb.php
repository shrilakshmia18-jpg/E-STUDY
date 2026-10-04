<?php
include 'dbconfig.php';
if(isset($_POST['addbranch']))
{
$branch=$_POST['name'];
$sql="INSERT INTO `branch` (`id`, `name`) VALUES (NULL, '$branch')";
if(mysqli_query($conn,$sql)){
    echo '<script>alert("Branch Inserted Successfully")</script>';
    echo '<META http-equiv="refresh" content="0;addbranch">';
}
else
{
    echo '<script>alert("DB Error")</script>';
    echo '<META http-equiv="refresh" content="0;addbranch">';
}
}
else
{
     echo '<META http-equiv="refresh" content="0;addbranch">';
}
?>

