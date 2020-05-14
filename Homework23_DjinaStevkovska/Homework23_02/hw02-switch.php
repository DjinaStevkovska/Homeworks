<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hw02-switch</title>
</head>
<body>
<form action="" method="POST">

    <h2>hw02-switch</h2>
    <label>Choose Day:<br></label>

    <select name="days">
        <option value="monday">Monday</option>
        <option value="tuesday">Tuesday</option>
        <option value="wednesday">Wednesday</option>
        <option value="thursday">Thursday</option>
        <option value="friday">Friday</option>
        <option value="saturday">Saturday</option>
    </select>
    <button type="submit">Submit</button>

</form>
<?php

if (isset($_POST["days"])) {
    $days = $_POST["days"];
    switch ($days) {
        case 'monday':
            echo "<p>Laugh on Monday, laugh for danger.</p>";
            break;
        case 'tuesday':
            echo "<p>Laugh on Tuesday, kiss a stranger.</p>";
            break;
        case 'wednesday':
            echo "<p>Laugh on Wednesday, laugh for a letter.</p>";
            break;
        case 'thursday':
            echo "<p>Laugh on Thursday, something better.</p>";
            break;
        case 'friday':
            echo "<p>Laugh on Friday, laugh for sorrow.</p>";
            break;
        case 'saturday':
            echo "<p>Laugh on Saturday, joy tomorrow.</p>";
            break;
        
        default:
            echo "<p>Enter valid day!";
            break;
    }
}

echo "<form action='hw02-switch.php'method='POST'><button>Back</button></form>";
?>

</body>
</html>