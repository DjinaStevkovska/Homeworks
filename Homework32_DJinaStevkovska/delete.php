<?php 
if(isset($_GET["id"])) {

    $getUsers = mysqli_connect("localhost", "root", "secret", "users");
    $delete = "DELETE FROM users WHERE id=".$_GET["id"];

    mysqli_query($getUsers, $delete);
    mysqli_close($getUsers);
    header("Locaton: index.php");
    
}