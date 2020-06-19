<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework_39</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container w-25">
        <div class="card">
            <div class="card-header text-center">
                <h2>Pay Invoice</h2>
            </div>
            <div class="card-body">
                <h3>Website Development</h3>
                <br>
                <p>Payment amount:</p>
                <h1>$100.00</h1>
                <br>
                <form action="src/generate_pdf.php" method="POST">
                    <label for="company">Company Name</label>
                    <br>
                    <input type="text" placeholder="Your Company Name" class="w-100" name="company">
                    <br>
                    <label for="address">Address</label>
                    <br>
                    <input type="text" placeholder="Your Business Address" class="w-100" name="address">
                    <div class="row">
                        <div class="col">
                            <label for="city">City</label>
                            <br>
                            <input type="text" placeholder="City" class="w-100" name="city">
                        </div>
                        <div class="col">
                            <label for="country">Country</label>
                            <br>
                            <input type="text" placeholder="Country" class="w-100" name="country">
                        </div>
                    </div>
                    <label for="postal_code">Postal Code</label>
                    <br>
                    <input type="text" placeholder="Postal" class="w-100" name="postal">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-success btn-block">Pay $100.00</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
