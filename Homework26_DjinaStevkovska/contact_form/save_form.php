<?php 
$name = isset($_POST["name"]) ? $_POST["name"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$message = isset($_POST["message"]) ? $_POST["message"] : "";
$file = "userInfo.txt";

if (!empty($name) && !empty($email) && !empty($message)) {
    $str = $name." | ".$email." | ".$message."\n";
    file_put_contents($file, $str, FILE_APPEND);
    echo "<h3>Your request is saved and we will contant you soon via email!</h3>";
} else {
    echo "<script>alert('Please fill all fields!')</script>";
    echo "<button><a href='http://app.test/contact_form'>Go back</a></button>";
}

