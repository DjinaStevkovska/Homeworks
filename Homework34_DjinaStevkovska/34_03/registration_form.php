<?php 
$browsers = ["Firefox", "Chrome", "Internet Explorer", "Safari", "Opera", "Other"];
require "select.php";
require "db_func.php";
?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Class Select - Browsers</title>
 </head>
 <body>
 <h2>User Registration - Browser</h2>
 <h2>User Registration - Browser<br /></h2>
 
<?php
//If form not submitted, display form.
 
?>
 
<form method="post" action=""> 
<!-- yourfile.php -->

<p>Name:<br />
<input type="text" name="name" size="60" />  </p>

<p>Username:<br />
<input type="text" name="username" size="60" /></p>

<p>Email:<br />
<input type="text" name="email" size="60" /></p>

<p>Browser:
<?php
//Instantiate object.
$browser = new Select();

//Set properties.
$browser->setName('browsers');
$browser->setValue($browsers);


//The object has the data it needs from the preceding commands.
//Tell it to make the select field.
$browser->makeSelect();

?>
</p>
<input type="submit" name="submit" value="Go" />
 
</form>
 
<?php
  //If form submitted, process input.
    if(isset($_POST["submit"])) {
        if (!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['browsers'])) {
            $name = trim($_POST['name']);
            $username = trim($_POST['username']);
            $email = trim($_POST['email']);
            $browser = $_POST['browsers'];
            $created_at = date("Y-m-d H:m:s");
    
            $db = new DB();
            $db->add_to_database(trim($_POST['name']), trim($_POST['username']), trim($_POST['email']), $_POST['browsers'], date("Y-m-d H:m:s"));
    
            echo "<p>Username: <b>".$username."</b></p>";
            echo "<p>Browser: <b>".$browser."</b></p>";
            echo "<p>Time: <b>".$created_at."</b></p>";
    
          }else {
            echo "<script> alert('Please fill all fields!')</script>";
          }
    }

 
?>
 </body>
 </html>
 