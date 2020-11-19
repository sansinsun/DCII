<?php
$uploads_dir = 'C:/Users/sixzhatesixz/Documents/';
$target = 'C:/Users/sixzhatesixz/Documents/'.basename($_FILES['UploadFileName']['name']);

if (!empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];

    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo "<p>An error occurred.</p>";
        exit;
    }

    // ensure a safe filename
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

    // don't overwrite an existing file
    $i = 0;
    $parts = pathinfo($name);
    while (file_exists($uploads_dir . $name)) {
        $i++;
        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }

    // preserve file from temporary directory
    $success = move_uploaded_file($myFile["tmp_name"], $uploads_dir . $name);
    if ($success) { 
        header("Location: add_event.php");
    }
    else {
        die('error!');
     }
    // set proper permissions on the new file
}


//API Url


?>
