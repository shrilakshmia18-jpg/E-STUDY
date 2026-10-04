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
          <h1><a href="index">E-<span class="logo_colour">Study Management System</span></a></h1>
          <h2>Easy way to learn new things</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index">Home</a></li>
          <li><a href="contact">Contact Us</a></li>
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
         <h1>User Register</h1>
      
        <form action="adduserdb" method="POST">
          <div class="form_settings">
              <p><span>Name</span><input class="contact" type="text" name="name" value="" required/></p>
              <p><span>Phone Number</span><input class="contact" type="number" name="phno" value="" required/></p>
              <p><span>Password</span><input class="contact" type="password" name="password" value="" required/></p>
              <p><span>Re-Enter Password</span><input class="contact" type="password" name="repass" value="" required/></p>
              <p><span>Address</span><input class="contact" type="text" name="address" value="" required/></p>
             <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="adduser" value="ADD" /></p>
          </div>
        </form>
         <a href="index">Login</a>
      </div>
    </div>
    <div id="footer">
      
       </div>
  </div>
</body>
</html>
