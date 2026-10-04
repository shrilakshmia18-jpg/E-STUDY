<?php
include 'dbconfig.php';
if(isset($_POST['addchap']))
{

$subid=$_POST['sid'];
$name=$_POST['name'];
$content=$_POST['content'];
$link=$_POST['link'];
$pic = $_FILES['notes']['name'];
$pic_loc = $_FILES['notes']['tmp_name'];
$info = pathinfo($_FILES['notes']['name']);
$ext = $info['extension'];
$newname = "$name.".$ext;
$folder="file/";
$target=$folder.$newname;
if(move_uploaded_file($pic_loc,$folder.$newname))
{
$sql="INSERT INTO `chapter` (`id`, `sid`,`name`, `content`, `video`,`notes`) VALUES (NULL, '$subid','$name', '$content', '$link','$target')";
if(mysqli_query($conn,$sql)){
    echo '<script>alert("Chapter Inserted Successfully")</script>';
    echo '<META http-equiv="refresh" content="0;addchap">';
}
else
{
    echo '<script>alert("DB Error")</script>';
    echo '<META http-equiv="refresh" content="0;addchap">';
}
}
else{
    echo '<script>alert("File Upload Error")</script>';
  //  echo '<META http-equiv="refresh" content="0;addchap">';
}
}
else
{
     echo '<META http-equiv="refresh" content="0;addchap">';
}
?>
