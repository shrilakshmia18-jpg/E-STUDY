<?php
include 'dbconfig.php';
$sid=$_GET['cid'];

$sql="delete from `chapter` where `id`='$sid'";
if(mysqli_query($conn,$sql)){
    echo '<script>alert("Chapter Deleted Successfully")</script>';
    echo '<META http-equiv="refresh" content="0;viewsub">';
}
else
{
    echo '<script>alert("DB Error")</script>';
    echo '<META http-equiv="refresh" content="0;viewsub">';
}
?>