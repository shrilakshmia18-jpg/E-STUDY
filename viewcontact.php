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
      echo '<META http-equiv="refresh" content="0;logout">';
    }
     //if(mysqli_query($conn, $sql))
    ?>
<!DOCTYPE HTML>
<html>

<head>
  <title>E-  <title>E-Study Management System </title></title>
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
          <h1><a href="index">E-Study Management System<span class="logo_colour">Study Management System</span></a></h1>
          <h2>Easy way to learn new things</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="view">View</a></li>
          <li><a href="add">Add</a></li>
           <li><a href="logout">Logout</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      
      <div id="content">
       
        <h1>Contact</h1>
         
        <?php
                      $sql="SELECT * FROM `contact`";
                       include 'dbconfig.php';
                   $result=$conn->query($sql);
                   if($result->num_rows>0)
                   {
                       echo "<table><tr><th>Slno</th><th>Name</th><th>Email</th><th>Subject</th><th>Message</th></tr>";
                       $slno=0;
                       while($row=$result->fetch_assoc())
                       {
                           $sub=$row['sub'];
                            $name=$row['name'];
                            $message=$row['message'];
                            $email=$row['email'];
                            $slno=$slno+1;
                            echo"<tr><td>$slno</td><td>$name</td><td>$email</td><td>$sub</td><td>$message</td></tr>";
                       }
                       echo '</table>';
                       }
                       else
                       {
                           echo 'No subjects For This Branch';
                       }
            ?>
      </div>
    </div>
    <div id="footer">
      
       </div>
  </div>
</body>
</html>
