<?php
if(file_exists("inc/config.php")) {
    include "inc/config.php";
} else {
    exit();
}
if(file_exists("inc/constants.php")) {
    include "inc/constants.php";
} else {
    exit();
}

function getTitle($page, $titles) {
    if ($page === "") {
        return "Home page";
    } else {
        foreach ($titles as $key => $value) {
            if($page === $key) {
                return $value;
            }
        }
    }
}
function registerUser($name, $id, $password, $confirmPassword) {
    $file = INI_FILE_DIR."/".$id.".ini";

    // if user do not exist, create account
    if (!file_exists($file)) {
        $content = "name=".$name."\n";
        $content .= "id=".$id."\n";
        $content .= "password=".$password."\n";
        $content .= "confirmPassword=".$confirmPassword."\n";
        
        if ($password === $confirmPassword && !empty($password)) {
            file_put_contents($file, $content);
                
            if (isset($_POST["register"])) {
                setcookie("usernameID", $_POST["id"]);
                header("Location: index.php?page=about");
            }
        } elseif (empty($password)) {
            // header("Location: index.php?page=login&error=".url_encode("Password not match"));

            echo "<script>alert('Please enter password!')</script>";
        } else {
            echo "<script>alert('Passwords not matching!')</script>";
        }
    } else {
        // if ID is existing
        echo "<script>alert('Your account ID is already in our system, try logging in!')</script>";
        // $REGISTERED = true;
    }
}

function login($username, $pass) {
    $file = INI_FILE_DIR."/".$username.".ini";

    if(file_exists($file)) {
        $userData = parse_ini_file($file);

             
        if ($userData["password"] === $pass && $userData["id"] === $username){
            // var_dump($userData);
            // var_dump($userData['name']);
            // var_dump($userData['id']);
            // var_dump($userData['password']);
            // var_dump($pass);

            setcookie("usernameID", $_POST["username"]);
            header("Location: index.php?page=about");

        } else {
            echo "<script>alert('Incorrect password!')</script>";
        }
        
        if (empty($password) || empty($username)) {
            echo "<script>alert('Please enter all information!')</script>";
        }

    } else {
        echo "<script>alert('Used does not exist, please register!')</script>";
    }
}

