<!DOCTYPE HTML>
<?php

 session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['password']))
    {
        $user=$_SESSION['username'];
        $pass=$_SESSION['password'];
    }
    else
    {
      echo '<META http-equiv="refresh" content="0;userlogout">';
    }
     //if(mysqli_query($conn, $sql))
    ?>
<?php
if(isset($_GET['sid'])){
    $sid=$_GET['sid'];
    $sql="select * from subject where id='$sid'";
                       include 'dbconfig.php';
                   $result=$conn->query($sql);
                   if($result->num_rows>0)
                   {
                       
                       while($row=$result->fetch_assoc())
                       {
                            $bname=$row['name']; 
                             }
                      
                       }
                       else
                       {
                           echo 'No subjects For This Branch';
                       }
        }

else{
    echo '<META http-equiv="refresh" content="0;index">';
}
?>
<html>

<head>
  <title>E-Study Management System</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index">E-Study Management System<span class="logo_colour"></span></a></h1>
          <h2>Easy way to learn new things</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index">Home</a></li>
           <li><a href="userlogout">Logout</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        
        <h1>Content</h1>
        <ul>
             <?php
                      $sql="select * from chapter where sid='$sid'";
                       include 'dbconfig.php';
                   $result=$conn->query($sql);
                   if($result->num_rows>0)
                   {
                       while($row=$result->fetch_assoc())
                       {
                           $id=$row['id'];
                            $name=$row['name']; 
                            echo" <li><a href=\"viewexp?cid=$id&sid=$sid\">$name</a></li>";
                       }
                       }
                      ?>
         
        </ul>
        
      </div>
      <div id="content">
        <h1>Chapters For <?php echo $bname;?></h1>
        <?php
        $sql="select * from chapter where sid='$sid'";
                       include 'dbconfig.php';
                   $result=$conn->query($sql);
                   if($result->num_rows>0)
                   {
                       while($row=$result->fetch_assoc())
                       {
                           $id=$row['id'];
                            $name=$row['name']; 
                            echo" <li><a href=\"viewexp?cid=$id&sid=$sid\">$name</a></li>";
                       }
                       }
        ?>
      </div>
    </div>
    <div id="footer">
      
       </div>
  </div>
</body>
</html>
