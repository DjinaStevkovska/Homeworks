<?php

$getUsers = mysqli_connect("localhost", "root", "secret", "users");
$sql = "SELECT * FROM users";

if(isset($_GET['sort'])) {
  if($_GET['sort'] == 'id') {
    $sql .= " ORDER BY id ASC"; 
  }
  if($_GET['sort'] == 'firstname') {
    $sql .= " ORDER BY firstname ASC"; 
    var_dump($sql);
  }
  if($_GET['sort'] == 'lastname') {
    $sql .= " ORDER BY lastname ASC"; 
  }
}

$query = mysqli_query($getUsers, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
// var_dump($result);

mysqli_close($getUsers);
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
      <th scope="col"><a href="index.php?sort=id">#</a></th>
      <th scope="col"><a href="index.php?sort=firstname">Firstname</a></th>
      <th scope="col"><a href="index.php?sort=lastname">Lastname</a></th>
      <th scope="col">Created</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>


    <?php foreach($result as $row) : ?>
        <tr>
          <th scope="row"><?php echo $row["id"]; ?></th>
          <td><?php echo $row["firstname"]; ?></td>
          <td><?php echo $row["lastname"]; ?></td>
          <td><?php echo $row["created_at"]; ?></td>
          <td> 
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
                    <a class="dropdown-item" href="update.php?id=<?php echo $row["id"]; ?>">Update</a>
                </div>
            </div>
          </td>
        </tr>
    <?php endforeach; ?>

  </tbody>
</table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>