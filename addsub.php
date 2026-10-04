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
         <form action="addsubdb" method="POST">
          <div class="form_settings">
              <p><span>Select Branch</span>
                  <select name="id">
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
                            echo"<option value='$id'>$name</option>";
                       }
                       }
                      ?>
                  </select>
               </p>
               <p><span>Subject Name</span><input class="contact" type="text" name="name" value="" required/></p>
               <p><span>Select Sem</span>
                  <select name="sem">
                       <?php for ($i = 1; $i <= 6; $i++): ?>
        <option value="<?php echo $i; ?>"><?php echo $i . ($i == 1 ? "st" : ($i == 2 ? "nd" : ($i == 3 ? "rd" : "th"))); ?></option>
    <?php endfor; ?>
                  </select>
               </p>
             <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="addsub" value="Add" /></p>
          </div>
        </form>
        
      </div>
    </div>
    
  </div>
</body>
</html>
