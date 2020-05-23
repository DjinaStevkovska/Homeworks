<?php
$filename = "movies/movies.csv";
$handle = fopen($filename, "r");
$result = [];
while (!feof($handle)) {
    $result[] = fgetcsv($handle);
}
fclose($handle);
array_shift($result);

$film = [];
$genres = [];
$studios = [];
$years = [];


foreach ($result as $line) {
    if(!in_array($line[0], $film)) {
        $film[] = $line[0];
        sort($film);
    }
    if(!in_array($line[1], $genres)) {
        $genres[] = $line[1];
        sort($genres);
    }
    if(!in_array($line[2], $studios)) {
        $studios[] = $line[2];
        sort($studios);
    }
    if(!in_array($line[7], $years)) {
        $years[] = $line[7];
        sort($years);
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Movie FIlter</h1>
        <form class="form-inline" method="POST">
            <label class="my-1 mr-2" >Genre: </label>
            <select class="custom-select my-1 mr-sm-2" name="genre">
                <option selected>Choose...</option>
                <!-- List Companies from CSV File here -->
                    <?php foreach($genres as $name):?>
                        <option value=<?php echo $name;?> > <?php echo $name;?> </option>
                    <?php endforeach;?>
            </select>
            
            <label class="my-1 mr-2" >Company Production: </label>
            <select class="custom-select my-1 mr-sm-2" name="studio">
                <option selected>Choose...</option>
                <!-- List Companies from CSV File here -->
                    <?php foreach($studios as $name):?>
                        <option value=<?php echo $name;?> > <?php echo $name;?> </option>
                    <?php endforeach;?>
            </select>

            <label class="my-1 mr-2" >Years: </label>
            <select class="custom-select my-1 mr-sm-2" name="years">
                <option selected>Choose...</option>
                <!-- List Years from CSV file here -->
                    <?php foreach($years as $line):?>
                        <option value=<?php echo $line;?> > <?php echo $line;?> </option>
                    <?php endforeach;?>
            </select>

            <button type="submit" class="btn btn-primary my-1" name="submit">Submit</button>
        </form>
 
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Film</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Lead Studio</th>
                    <th scope="col">Year</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if (isset($_POST["submit"])) {
                    foreach($result as $line) {
                        if($line[1] === $_POST["genre"] || $line[2] == $_POST["studio"] || $line[7] == $_POST["years"]) {
            
                            echo "<tr>";
                            echo "<td>".$line[0]."</td>";
                            echo "<td>".$line[1]."</td>";
                            echo "<td>".$line[2]."</td>";
                            echo "<td>".$line[7]."</td>";
                            echo "</tr>";

                        }
                    }
                } else {
                    foreach($result as $line) {
                        echo "<tr>";
                        echo "<td>".$line[0]."</td>";
                        echo "<td>".$line[1]."</td>";
                        echo "<td>".$line[2]."</td>";
                        echo "<td>".$line[7]."</td>";
                        echo "</tr>";
                    }
                }
            ?>
            </tbody>
        </table>
    </div>
</body>

</html>