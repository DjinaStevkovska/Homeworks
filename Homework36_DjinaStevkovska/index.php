<?php
include 'djina/Select/Aselect.php';
include 'djina/Select/Bootstrapselect.php';
include 'djina/Select/Htmlselect.php';

// use namespace
use Djina\Select\HtmlSelect;
use Djina\Select\BootstrapSelect;

$browsers= [
    "None",
    "Firefox",
    "Chrome",
    "Internet Explorer",
    "Safari",
    "Opera",
    "Other"
 ];


//  $browsers=array(
//     "Firefox",
//     "Chrome",
//     "Internet Explorer",
//     "Safari",
//     "Opera",
//     "Other" 
//   );
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Class Select - Browsers</title>
 </head>
 <body>
 
 <h2>User Registration - Browser<br /></h2>
 
<?php
//If form not submitted, display form.
if(!isset($_POST['submit'])){
?>
 
<form method="post" action="registrationForm.php">
<p>Name:<br />
<input type="text" name="name" size="60" />  </p>
<p>Username:<br />
<input type="text" name="username" size="60" /></p>
<p>Email:<br />
<input type="text" name="email" size="60" /></p>
<p>Browser:
 
 
<?php
 $htmlSelect = new HtmlSelect();
 $htmlSelect->setName('browserWork');
 $htmlSelect->setValue($browsers);
 $htmlSelect->makeSelect();


//  $bootstrapSelect = new BootstrapSelect();
//  $bootstrapSelect->setName('browserWork');
//  $bootstrapSelect->setValue($browsers);
//  $bootstrapSelect->makeSelect();
?>
</p>
<input type="submit" name="submit" value="Go" />
 
</form>
 
<?php  }else{
    
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];   
    $selectedBrowser=$_POST['browserWork'];   
    echo "Thanks for registration <b> $name: </b> <br />";
    echo "Username: $username<br />";
    echo "Email: $email<br />";
    echo "Browser: $selectedBrowser<br />";
 
}
 
?>
 </body>
 </html>
 


//  $htmlSelect = new HtmlSelect();
//  var_dump($htmlSelect);
//  $browsers->setName('browserWork');
//  $browsers->setValue($browsers);
//  // that will create select
//  $browser->makeSelect();