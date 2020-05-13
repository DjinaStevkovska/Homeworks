<?php

$day = $_POST["day"];

if (isset($day)) {
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