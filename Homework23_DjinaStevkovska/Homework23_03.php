<?php

// 1
echo "<h3>Exercise 1</h3>";
$year = date("Y");
echo("© " .$year. " PHP Exercises - CodeAcademy<br>");


// 2
echo "<h3>Exercise 2</h3>";
$today = time();
$birthday = mktime(0,0,0,04,07,2021);
$countdown = round(($birthday - $today)/86400);
echo "$countdown days until my next birthday!";



// 3
echo "<h3>Exercise 3</h3>";
$today = "01.09.2020";   
echo date("Y/m/d", strtotime($today)) ."<br>";
echo date("y.m.d", strtotime($today)) ."<br>";
echo date("d-m-Y", strtotime($today) );


// 4
echo "<h3>Exercise 4</h3>";
$today = date("m.d.y"); 
$birthday = "07.04.1998";
$result = abs(strtotime($today) - strtotime($birthday));
$years = floor($result / (365*60*60*24));
$months = floor(($result - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($result - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
echo "I am ";
printf("%d years, %d months, %d days", $years, $months, $days);
echo " old!<br>";


// 5
echo "<h3>Exercise 5</h3>";
$date = "2020-09-12";
$newDate = date("d-m-Y", strtotime($date));
echo($date ."<br>");
echo($newDate);


// 6
echo "<h3>Exercise 6</h3>";
$birthday = "07.04.1998";
$result = abs(strtotime($today) - strtotime($birthday));
echo "I am ";
printf(round($result/86400));
echo " days old!<br>";


// 7
echo "<h3>Exercise 7</h3>";
$first_date = date('d ',strtotime('first day of April 2010'));
$first_day = date('D',strtotime('first day of April 2010'));

$last_date = date('d ',strtotime('last day of april 2010'));
$last_day = date('D',strtotime('last day of april 2010'));

echo("First day of April 2020 is: <strong>" .$first_date.$first_day. "</strong>");
echo "<br>";
echo("Last day of April 2020 is: <strong>" .$last_date.$last_day. "</strong>");


// 8
echo "<h3>Exercise 8</h3>";
echo date('l \t\h\e jS');


// 9
echo "<h3>Exercise 9</h3>";
$today = date("Y-d-m G:i:s");  
$td = date("g:i a ");    

echo($today) ."<br>";

echo($td);
echo date('jS \o\f F');
