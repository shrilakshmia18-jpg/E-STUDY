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
          <li><a href="index">Home</a></li>
          <li class="selected"><a href="contact">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      
      <div id="content">
        <h1>Contact Us</h1>
      
        <form method="POST" action="contactdb">
          <div class="form_settings">
              <p><span>Name</span><input class="contact" type="text" name="name" value="" required/></p>
            <p><span>Email Address</span><input class="contact" type="email" name="email" value="" required/></p>
            <p><span>Subject</span><input class="contact" type="text" name="subject" value="" required/></p>
            <p><span>Message</span><textarea class="contact textarea" rows="8" cols="50" name="enquiry" required></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
          </div>
        </form>
        
      </div>
    </div>
    
     
  </div>
</body>
</html>
