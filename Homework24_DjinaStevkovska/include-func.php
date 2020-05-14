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
    echo '
    <form action="" method="POST"><br>
    <label for="months">Please choose a month.</label><br>
    <select name="months"><br>
    <option value="" selected>Select month</option><br>';
    makeOptions();
    echo '</select>
    <button type="submit" name="submit">Submit</button><br>
    </form>
    ';
}

makeSelect();

if (isset($selectedMonth)) {
    echo "<p>" .$selectedMonth. " has: " .SELECTED_MONTHS[$selectedMonth]. " days.</p>";
}

?>