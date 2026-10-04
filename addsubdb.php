<?php
include 'dbconfig.php';
if(isset($_POST['addsub']))
{
$name=$_POST['name'];
$branch=$_POST['id'];
$sem=$_POST['sem'];
$sql="INSERT INTO `subject` (`id`, `name`, `bid`,`sem`) VALUES (NULL, '$name', '$branch','$sem');";
if(mysqli_query($conn,$sql)){
    echo '<script>alert("Subject Inserted Successfully")</script>';
    echo '<META http-equiv="refresh" content="0;addsub">';
}
else
{
    echo '<script>alert("DB Error")</script>';
    echo '<META http-equiv="refresh" content="0;addsub">';
}
}
else
{
     echo '<META http-equiv="refresh" content="0;addsub">';
}
?>
