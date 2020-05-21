<?php
if (is_dir("file_uploads") === false) {
    mkdir("file_uploads");
}
$targetDir = "file_uploads";
if (isset($targetDir)) {
    $filename = $_FILES['fileWeUpload']['name'];

    if (isset($_FILES['fileWeUpload']) && !empty($filename)) {

        $tmpFilePath = $_FILES['fileWeUpload']["tmp_name"];
        $pathInfo = pathinfo($targetDir.DIRECTORY_SEPARATOR.$filename);
        $basename = $pathInfo['basename'];
        $ext = $pathInfo['extension'];
        $filename = $pathInfo['filename'];

        $secretFilename = md5($filename);                                       // 'c3184f347e5e809d20a2e5b2fc02aa8d'
        $newPathDir = $targetDir.DIRECTORY_SEPARATOR.$secretFilename.".".$ext;         // 'file_uploads/c3184f347e5e809d20a2e5b2fc02aa8d/pdf'
        move_uploaded_file($tmpFilePath, $newPathDir);

        echo "<h3>File is uploaded sucessfully!</h3>";
    }
}
 