<?php

    
 // FOR EXTRA !!!
    // you normal select query to get all users (not ordered)
    $sql = "SELECT * FROM users";
    
    //order users by id, firstname OR lastname
    if(isset($_GET['sort'])) {
        // if user selected to order user records by id, we add to our query ORDER BY keyword
        if($_GET['sort'] == 'id') {
            $sql .= " ORDER BY id ASC"; // you need to change id to firstname or lastname in other IFs
        }
        // similar but for firstname, lastname ( You got the idea! )
    }
    // get results as usual from mysqli_query() and so continue script logic
    // other code...
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">View Users</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="create.php">Create</a>
 
                <a class="dropdown-item" href="index.php">View</a>
                </div>
            </li>
            </ul>
        </div>
        </nav>
    
    <div>
    <table class="table table-dark">
  <thead>
    <tr>
        <!-- We make table headers clickable with link tag -->
      <th scope="col"><a href="index.php?sort=id">#</a></th>
      <th scope="col"><a href="index.php?sort=firstname">Firstname</a></th>
      <th scope="col"><a href="index.php?sort=lastname">Lastname</a></th>
      <th scope="col">Created</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <!-- your foreach here -->

    <!-- This example table TR you need to include in your foreach loop -->
    <!-- <tr>
          <th scope="row"><?php // user id ?></th>
          <td><?php //user firstname ?></td>
          <td><?php  // user lastname ?></td>
          <td><?php //user created date ?></td>
          <td> 
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="delete.php?id=<?php //user id ?>">Delete</a>
                    <a class="dropdown-item" href="update.php?id=<?php //user id  ?>">Update</a>
                </div>
            </div>
        </td>
    </tr> -->
  </tbody>
</table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>