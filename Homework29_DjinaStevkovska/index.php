<?php
include "functions.php";

    // $ext = pathinfo($_FILES['image']['name']);
    // $ext = $ext['extension'];

    // $imgLocation = './images/contacts/';
    // $imgNewName = $id . "." . $ext;
    // $saveTarget = $imgLocation . $imgNewName;
    // $imagesData = $id . "," . $imgLocation . "," . $imgNewName;

    // $handle_images = fopen('./data/contact_images.csv', 'a+');
    // fputcsv($handle_images, explode(',', $imagesData));
    // fclose($handle_images);
    // move_uploaded_file($_FILES['image']['tmp_name'], $saveTarget);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>My Contacts page</title>
</head>
<body>

<!-- 
    <div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=index">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=create">CREATE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=read">CONTACT BOOK</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=update">UPDATE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=delete">DELETE</a>
        </li>
        </ul>
    </div>
    <div class="card-body">
        <h5 class="card-title">Welcome to your contact book</h5>
        <p class="card-text">This is your contact book. You can navigate through nav-bar to create, read, update and delete contact.</p>
        <a href="#" class="btn btn-primary">Like</a>
    </div>
    </div> -->
    <?php

        switch ($page) {
            case 'create':
                // $title = "About";
                include './pages/create.php';
                break;
            case 'read':
                include './pages/read.php';
                break;
            case 'update':
                include './pages/update.php';
                break;
            default:
                include './pages/read.php';
                break;
        }


    ?>


    <footer class="text-muted text-center mt-5">
        &copy; <?= date('Y'); ?> - DJINA STEVKOVSKA
    </footer>
</body>
</html>