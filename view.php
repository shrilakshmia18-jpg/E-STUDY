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
          <li><a href="view">View</a></li>
          <li><a href="add">Add</a></li>
           <li><a href="logout">Logout</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      
      <div id="content">
        <h1>View</h1>
      
        <form action="viewsub" method="POST">
          <div class="form_settings">
           
             <p style="padding-top: 15px"><input class="submit" type="submit" name="contact_submitted" value="View Subject" /></p>
          </div>
        </form>
        <form action="viewcontact" method="POST">
          <div class="form_settings">
           
             <p style="padding-top: 15px"><input class="submit" type="submit" name="contact_submitted" value="View Queries" /></p>
          </div>
        </form>
        
      </div>
    </div>
    <div id="footer">
      
       </div>
  </div>
</body>
</html>
