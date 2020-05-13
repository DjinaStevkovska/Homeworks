<?php

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


echo "<form action='hw02-switch.php'method='POST'><button>Back</button></form>";




