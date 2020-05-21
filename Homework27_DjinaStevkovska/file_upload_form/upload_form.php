<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>
<body>
    <h1>File upload form</h1>
    <form action="upload_file.php" method="POST" enctype="multipart/form-data">
 
        <label for="fileUp">Select files to upload:</label>
        <input type="file" name="fileWeUpload" id="fileUp"> <br>
        <input type="submit" value="Upload file" name="submit">
    </form>
</body>
</html>
