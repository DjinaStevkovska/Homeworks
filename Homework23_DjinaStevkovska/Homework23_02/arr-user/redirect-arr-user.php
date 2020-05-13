<?php 

$city = $_POST["city"];
$month = $_POST["month"];
$year = $_POST["year"];
$selected = $_POST["checked"];

echo "<h2><em>With arrays</em></h2>
<h1>How is your weather?</h1>";

if ($city && $month && $year) {
    echo "In ".$city. " in the month of " .$month. " " .$year. ", you obsrved the following weather:<br>";
} else {
    echo "<p>You did not enterd all information</p><br>";
}



if (isset($selected)) {
    $allSelected = count($selected);
    for ($i=0; $i < $allSelected ; $i++ ) {
        echo "<li>" .$selected[$i]. "</li>";
    } 
} else {
    echo "<p>You did not enterd all weather information</p><br>";
} 
