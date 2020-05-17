<?php
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
    $fileDir = "/home/vagrant/code/public/company-website/ini-files";
    $file = $fileDir."/".$id.".ini";

    // if user do not exist, create account
    if (!file_exists($file)) {
        $content = "name=".$name."\n";
        $content .= "id=".$id."\n";
        $content .= "password=".$password."\n";
        $content .= "confirmPassword=".$confirmPassword."\n";
        
        if ($password === $confirmPassword) {
            file_put_contents($file, $content);
        } else {
            echo "<script>alert('Passwords not matching!')</script>";
        }
    } else {
        // if ID is existing
        echo "<script>alert('Your account ID is already in our system, try logging in!')</script>";
        // $REGISTERED = true;
    }
}

function login($username, $password) {
    $file = $fileDir."/".$id."ini";
    if(file_exists($file)) {
        $userData = parse_ini_file($file);
        // if ($userData["password"]) === $password){
        //     //  && $userData["id"] === "$username"
        //     setcookie("username", $_POST["username"]);
        //     header("Location: index.php?page=about"); 
        // }
    // }
}
}

$navItems = [
    "index.php?page=index" => "Home",
    "index.php?page=about" => "About",
    "index.php?page=contact" => "Contact",
    "index.php?page=login" => "Login"
];

$titles = [
    "index" => "Home page",
    "about" => "About page",
    "contact" => "Contact page",
    "login" => "Login page"
];