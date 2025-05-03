<?php
session_start();
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['fileUpload']['name'])) {
        //estrapoliamo il file dal form
        $target_dir = "./image/";
        $target_file = $target_dir . $_FILES['fileUpload']['name'];
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));




        // Check if file already exists
        if (file_exists($target_file)) {
            $message = "Sorry, file already exists.";
            $uploadOk = 0;
        }


        // Now, we want to check the size of the file. If the file is larger than 500KB, an error message is displayed, and $uploadOk is set to 0:
        // Check file size
        if ($_FILES["fileUpload"]["size"] > 500000) {
            $message = "Sorry, your file is too large.";
            $uploadOk = 0;
        };

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "svg"
        ) {
            $message = "Sorry, only JPG, JPEG, PNG & SVG files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $message = "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
                $message = "The file " . htmlspecialchars(basename($_FILES["fileUpload"]["name"])) . " has been uploaded.";
            } else {
                $message = "Sorry, there was an error uploading your file.";
            }
        }
    }

    $_SESSION['messaggio'] = $message;
    // var_dump($_SESSION);

}
