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
    <form action="redirect-arr-user.php" method="POST">
        <p>Please enter your information:</p>

        <label>City:<br></label>
        <input type="text" name="city" required><br></input>
        <br>
        <label>Month:<br></label>
        <input type="text" name="month" required><br></input>
        <br>
        <label>Year:<br></label>
        <input type="text" name="year" required><br></input>
        <br>

        <p>Please choose the kinds of weather you experienced from the list below.<br> Choose all that apply.</p>

        <br>

        <input type="checkbox" name="checked" value="sunshine">
        <label for="sunshine"> Sunshine</label><br>
        <input type="checkbox" name="checked" value="clouds">
        <label for="clouds"> Clouds</label><br>
        <input type="checkbox" name="checked" value="rain">
        <label for="rain"> Rain</label><br>
        <input type="checkbox" name="checked" value="hail">
        <label for="hail"> Hail</label><br>
        <input type="checkbox" name="checked" value="sneet">
        <label for="sneet"> Sneet</label><br>
        <input type="checkbox" name="checked" value="snow">
        <label for="snow"> Snow</label><br>
        <input type="checkbox" name="checked" value="wind">
        <label for="wind"> Wind</label><br>
        <input type="checkbox" name="checked" value="cold">
        <label for="cold"> Cold</label><br>
        <input type="checkbox" name="checked" value="heat">
        <label for="heat"> Heat</label><br>
        <br>

        <button type="submit">Submit</button>


    </form>



</body>
</html>