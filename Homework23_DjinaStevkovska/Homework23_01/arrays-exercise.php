<?php

echo "<h3>Exercise 1</h3><br>";
$a = array( 0, 1, 2, 3, 4 );
echo $a[3] ."<br>";




echo "<h3>Exercise 2</h3><br>";
$a = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );
echo $a["three"] ."<br>";




echo "<h3>Exercise 3</h3><br>";
$a = array(
    array(
        0,
        1
    ),
    array(
        2,
        array(
            3
        )
    )
);
echo($a[1][1]["0"]);




echo "<h3>Exercise 4</h3><br>";
$a = array(
    "a" => array(
        "b" => 0,
        "c" => 1
    ),
    "b" => array(
        "e" => 2,
        "o"=> array(
            "b"=>3
        )
    )
);
echo($a[1][1][0]);
echo($a["b"]["o"]["b"]);




echo "<h3>Exercise 5</h3><br>";
$a = "a,b,c,d,e,f";
$aexplode = explode(",", $a);
var_dump($aexplode);

// var_dump( explode(",", $a));




echo "<h3>Exercise 6</h3><br>";
// $aexplode = array(
//     0 =>  'a', 
//     1 =>  'b' ,
//     2 =>  'c' ,
//     3 =>  'd' ,
//     4 =>  'e' ,
//     5 =>  'f' 
// );

$newArr;
foreach ($aexplode as $value) {
    $newArr[$value] = $value;
}
var_dump($newArr);

// $result = array_combine($aexplode, $aexplode);
// var_dump($result);




echo "<h3>Exercise 7</h3><br>";
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
$keysAndValues = array_combine($keys, $values);
var_dump($keysAndValues);




echo "<h3>Exercise 8</h3><br>";
$transactions = array(
    array(
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "debit"=>15,
        "credit"=>14
    )
);

foreach ($transactions as $key => $value) {
    $debit = $transactions[$key]["debit"];
    $credit = $transactions[$key]["credit"];
    $amount = abs($debit-$credit);

    // $data[$amount] = $amount;
    // // $data = array($amount);
    // // array_push($data, "amount");
    // // var_dump($data);
}
var_dump($transactions);




echo "<h3>Exercise 9</h3><br>";
$sum = 0;
$a = array( 0, 1, 2, 3, 4, 5, 6 );
foreach ($a as $value) {
    $sum += $value;
}
echo$sum;

//echo array_sum($a);

?>

