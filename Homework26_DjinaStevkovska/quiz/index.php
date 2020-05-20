<?php
session_start();

if(isset($_POST['q'])) {
    $q = $_POST['q'];    
    $q++;
} else {
    $q = 0;
}
 
if(!empty($_POST['answer'])) { 
    $answer = $_POST['answer'];
    $_SESSION["quiz"]['q'.$_POST['q']] = $answer;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    <div class="container" style="margin-top: 70px !important;">
        <div class="row">
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-6 col-sm-12 border mt-4 mx-2 p-4 rounded shadow">
                <div class="form">
                    <div class="text-center py-4">
                        <i class="fas fa-user-circle fa-3x"></i></div>
                    <h2 style="text-align: center" class="pb-4">Javascript quiz</h3>

                    <?php
                        switch ($q) {
                            case 0:
                                include 'start.php';
                                break;
                            case 1:
                                include 'questions/q1.php';
                                break;
                            case 2:
                                include 'questions/q2.php';
                                break;
                            case 3:
                                include 'questions/q3.php';
                                break;
                            case 4:
                                include 'questions/q4.php';
                                break;
                            case 5:
                                include 'questions/q5.php';
                                break;
                                
                            default:
                                include 'result.php';
                                break;
                        }
                        ?>
                </div>
            </div>
 
        </div>
    </div>

</body>

</html>