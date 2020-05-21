<?php
$dir = "logs";

if (!is_dir($dir)) {
    mkdir($dir);
}

$logFile = "logs/my-website.log";
$dt = date('Y-m-d H:i:s');
$page = $_SERVER['REQUEST_URI'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$ip =  $_SERVER['REMOTE_ADDR'];

$logLine = $dt.' | '.$page.' | '.$browser.' | '.$ip;

$file = fopen($logFile, "a+");
fputs($file, $logLine."\r\n");
fclose($file);

$logs = file($logFile);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Logs</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Website logs</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Log line</th>
                        <th>Log record</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example foreach - modify it if needed according your way -->
                    <?php if(!empty($logs)): ?>
                        <?php foreach($logs as $line=>$value) :?>
                            <!-- We display TR row here -->
                            <tr>
                                <td><?php echo $line+1; ?></td>
                                <td><?php echo $value ?></td>
                            </tr>
                        <?php endforeach;?>
                    <?php endif; ?>
                    <!-- End example -->
                </tbody>
        </div>
    </div>
</body>

</html>