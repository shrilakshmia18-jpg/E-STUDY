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
     $sql="select * from user where phno='$user'";
include 'dbconfig.php';
$result = $conn->query($sql);
session_start();
if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        $uname=$row['name'];
    }
}
    ?>
<html>

<head>
  <title>E-Study</title>
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
          <li class="selected"><a href="userindex">Home</a></li>
          <li><a href="userlogout">Logout</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        
        <h1>Branches</h1>
        <ul>
             <?php
                      $sql="select * from branch";
                       include 'dbconfig.php';
                   $result=$conn->query($sql);
                   if($result->num_rows>0)
                   {
                       while($row=$result->fetch_assoc())
                       {
                           $id=$row['id'];
                            $name=$row['name']; 
                            echo" <li><a href=\"viewsubjects?bid=$id\">$name</a></li>";
                       }
                       }
                      ?>
         
        </ul>
        
      </div>
      <div id="content">
        <h1>Welcome to E-Study Management System</h1>
         Welcome <?php echo $uname;?>
      </div>
    </div>
    <div id="footer">
      
       </div>
  </div>
</body>
</html>
