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
        <h1>Add Subject</h1>
        <form action="addchapdb" method="POST" enctype="multipart/form-data">
          <div class="form_settings">
              <p><span>Select Subject</span>
                  <select name="sid">
                      <?php
                      include 'dbconfig.php';
			$query="select * from branch";
			$res=mysqli_query($conn,$query);
			while($row=mysqli_fetch_assoc($res))
			{   echo "<option>".$row['name'];
                            $qq = "select * from subject where bid=".$row['id'];
                                    $ress = mysqli_query($conn,$qq) or die("wrong delete subcat query..");
                                    while($roww = mysqli_fetch_assoc($ress))
                                    {
                                            echo "<option value='".$roww['id']."'> ---> ".$roww['name'];
                                    }
												
                            }
                        ?>
                  </select>
               </p>
               <p><span>Chapter Name</span><input class="contact" type="text" name="name" value="" required/></p>
               <p><span>Content</span><textarea class="contact textarea" rows="8" cols="50" name="content" required></textarea></p>
               <p><span>Video Link</span><input class="contact" type="text" name="link" value="" required/></p>
               <p><span>Notes</span><input class="contact" type="file" name="notes" value="" required/></p>
             <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="addchap" value="Add" /></p>
          </div>
        </form>
        
      </div>
    </div>
    
  </div>
</body>
</html>
