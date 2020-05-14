<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hw02-else-if</title>
</head>
<body>
    <h2>Day of The Week</h2>
    <form action="" method="POST">
        <label for="day">Enter Day here:<br></label>
        <input type="text" name="day"></input><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if (!empty($_POST["day"])) {
        $day = $_POST["day"];
        if (strtoupper($day) === "MONDAY") {
            echo "<p>Laugh on Monday, laugh for danger.</p>";
        } elseif (strtoupper($day) === "TUESDAY") {
            echo "<p>Laugh on Tuesday, kiss a stranger.</p>";
        } elseif (strtoupper($day) === "WEDNESDAY") {
            echo "<p>Laugh on Wednesday, laugh for a letter.</p>";
        } elseif (strtoupper($day) === "THURSDAY") {
            echo "<p>Laugh on Thursday, something better.</p>";
        } elseif (strtoupper($day) === "FRIDAY") {
            echo "<p>Laugh on Friday, laugh for sorrow.</p>";
        } elseif (strtoupper($day) === "SATURDAY") {
            echo "<p>Laugh on Saturday, joy tomorrow.</p>";
        } else {
            echo "<p>Enter valid day!";
        }
    }
    ?>
    
</body>
</html>