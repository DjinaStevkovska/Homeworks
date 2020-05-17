<?php

    if(isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = "";
    }

    if(file_exists("inc/func.php")) {
        include "inc/func.php";
        $title = getTitle($page, $titles);

    } else {
        exit("Error!");
    }

    if (isset($_POST["username"]) && (isset($_POST["login"]))) {
        setcookie("username", $_POST["username"]);
        header("Location: index.php?page=about");
    }

?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Local libraries -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="all.css">
    <script src="assets/js/all.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script defer src="assets/js/script.js"></script> -->

    <!-- cdn for libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="assets/js/script.js"></script>

    <title>BootsApp | 
        <?php 
        echo $title; ?> 
    </title>
    <style>
    </style>
</head>

<body>

    <!-- Navigation -->
    <?php include("./inc/navigation-inc.php") ?>

    <!-- Content Start -->

    <?php

        switch ($page) {
            case "about" :
                $title = "About";
                include "./pages/about.php";
                $footer = true;
            break;

            case "contact" :
                $title = "Contact";
                include "./pages/contact.php";
                $footer = false;
            break;

            case "login" :
                $title = "Login";
                include "./pages/login.php";
                $footer = false;
            break;

            default:
                $title = "Home";
                include "./pages/index-content.php";
                $footer = true;
            break;   

        } 

    ?>

    <!-- Content End -->

    <!-- Footer -->
    <?php
        if($footer) {
            include "./inc/footer-inc.php";
        }    
    ?>
    
</body>

</html>