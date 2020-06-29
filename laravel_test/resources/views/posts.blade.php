<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    <h2><strong> {{ $post->slug }} </strong></h2>

    <p> {{ $post->body }} </p>
    <?php
    // var_dump($post);
    ?>
    
</body>
</html>