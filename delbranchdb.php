<?php
include 'dbconfig.php';
if(isset($_POST['delbranch']))
{
$branch=$_POST['name'];
$sql="delete from `branch` where `id`='$branch'";
if(mysqli_query($conn,$sql)){
    echo '<script>alert("Branch Deleted Successfully")</script>';
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

