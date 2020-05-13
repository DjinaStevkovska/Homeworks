<?php 
    $months = [
        "January" => "31",
        "February" => "28 days, if leap year 29",
        "March" => "31",
        "April" => "30",
        "May" => "31",
        "June" => "30",
        "July" => "31",
        "August" => "31",
        "September" => "30",
        "October" => "31",
        "November" => "30",
        "December" => "31"
    ];
    if (isset($_POST['submit'])) {
        $selectedMonth = $_POST["months"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="months">Please choose a month.</label>
        <br>
        <br>
        <select name="months">
        <option value="" selected>Select month</option>
        <?php
            foreach ($months as $key => $value) {
                echo "<option value='.$key.'>$key</option>";
            }
        ?>
        </select>
        <button type="submit" name="submit">Submit</button>
    </form>
    <p>
        <?php
            if (isset($selectedMonth)) {
                echo "$selectedMonth has: $months[$selectedMonth] days";
            }
        ?>
    </p>
</body>
</html>