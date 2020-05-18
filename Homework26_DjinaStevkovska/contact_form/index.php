<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
    <div class="container" style="margin-top: 70px !important;">
        <div class="row">
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-6 col-sm-12 border mt-4 mx-2 p-4 rounded shadow">
                <div class="form">
                    <div class="text-center py-4">
                        <i class="fas fa-user-circle fa-3x"></i></div>
                    <h3 style="text-align: center" class="pb-4">Contact us</h3>
                    <form class="form-group" method="POST" action="save_form.php">
                        <input type="text" class="form-control" placeholder="Your name" name="name">
                        <br>
                        <input type="email" class="form-control" placeholder="Enter Email" name="email">
                        <br>
                        <textarea class="form-control" name="message" placeholder="Message"></textarea>
                        <br>
                        <br>
                        <button class="btn btn-primary btn-block">Send message</button>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-sm-12"></div>
        </div>
    </div>

</body>

</html>