<?php 
    const SELECTED_MONTHS = [
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

    // var_dump(SELECTED_MONTHS);
    // is_array(SELECTED_MONTHS);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework24</title>
</head>
<body>
    <form action="" method="POST">
        <label for="months">Please choose a month.</label>

        <?php
        makeSelect();
        function makeOptions() {
            if (is_array(SELECTED_MONTHS)) {
                foreach (SELECTED_MONTHS as $key => $value) {
                    echo "<option>$key</option>";
                }
            } else {
                echo "Warning: Array Not Found!";
                exit();
            }
        }

        function makeSelect() {
            echo '<select name="months"><br>
            <option value="" selected>Select month</option>';
            makeOptions();
        }
        ?>
        </select>
        <button type="submit" name="submit">Submit</button>
    </form>

    <p>
        <?php
            if (isset($selectedMonth)) {
                echo $selectedMonth. " has: " .SELECTED_MONTHS[$selectedMonth]. " days.";
            }
        ?>
    </p>

</body>
</html>