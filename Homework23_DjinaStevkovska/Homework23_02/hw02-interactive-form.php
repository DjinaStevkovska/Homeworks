<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hw02-interactive-form</title>
</head>
<body>
    <h2>Favorite City</h2>
    <form action="" method="POST">
        <label>Enter City here:<br></label>
        <input type="text" name="city"><br></input>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php

    if (isset($_POST['city'])) {
    $city = $_POST['city'];
    }

    if (isset($_POST['submit']) && (!empty($city))) {
        echo "<p>Your favorite city is " .$city. "!</p>";
    } elseif (empty($city)) {
        echo "Please enter city!";

    }
    ?>

</body>
</html>