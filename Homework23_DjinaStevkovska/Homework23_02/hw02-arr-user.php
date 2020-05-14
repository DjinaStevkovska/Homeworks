<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hw02-arr-user</title>
</head>
<body>
    <h2><em>With arrays</em></h2>
    <h1>How is your weather?</h1>
    <form action="" method="POST">
        <h4>Please enter your information:</h4>

        <label>City:<br></label>
        <input type="text" name="city"><br></input>
        <br>
        <label>Month:<br></label>
        <input type="text" name="month"><br></input>
        <br>
        <label>Year:<br></label>
        <input type="text" name="year"><br></input>
        <br>

        <h4>Please choose the kinds of weather you experienced from the list below.<br> Choose all that apply.</h4>

        <br>

        <input type="checkbox" name="checked[]" value="sunshine">
        <label for="sunshine"> Sunshine</label><br>
        <input type="checkbox" name="checked[]" value="clouds">
        <label for="clouds"> Clouds</label><br>
        <input type="checkbox" name="checked[]" value="rain">
        <label for="rain"> Rain</label><br>
        <input type="checkbox" name="checked[]" value="hail">
        <label for="hail"> Hail</label><br>
        <input type="checkbox" name="checked[]" value="sneet">
        <label for="sneet"> Sneet</label><br>
        <input type="checkbox" name="checked[]" value="snow">
        <label for="snow"> Snow</label><br>
        <input type="checkbox" name="checked[]" value="wind">
        <label for="wind"> Wind</label><br>
        <input type="checkbox" name="checked[]" value="cold">
        <label for="cold"> Cold</label><br>
        <input type="checkbox" name="checked[]" value="heat">
        <label for="heat"> Heat</label><br>
        <br>

        <button type="submit" name="submit">Submit</button>

    </form>

    <?php 
        if (isset($_POST["submit"])) {
            $city = $_POST["city"];
            $month = $_POST["month"];
            $year = $_POST["year"];
        }
        
        if (isset($_POST["submit"]) && !empty($city && $month && $year)) {
            // if (!empty($city && $month && $year)) {
                echo "In ".$city. " in the month of " .$month. " " .$year. ", you obsrved the following weather:<br>";
            } 
        // }

        if (isset($_POST["submit"])) {
            if (!empty($_POST["checked"]) && $city && $month && $year) {
                foreach ($_POST["checked"] as $value) {
                    echo "<li>" .$value. "</li>";
                } 
            } else {
                echo "<script>alert('You did not enterd all weather information!')</script><br>";
            } 
        }
    ?>

</body>
</html>