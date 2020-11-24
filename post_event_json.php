<?php



print_r($_POST);
print_r($_FILES);


if (($_FILES['myFile']['name']!="")){
    // Where the file is going to be stored
        $target_dir = "img/";
        $file = $_FILES['myFile']['name'];
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['myFile']['tmp_name'];
        $path_filename_ext = $target_dir.$filename.".".$ext;
     
    // Check if file already exists
    if (file_exists($path_filename_ext)) {
     echo "Sorry, file already exists.";
     }else{
     move_uploaded_file($temp_name,$path_filename_ext);
     echo "Congratulations! File Uploaded Successfully.";
     }
    }

   //API Url
$url = 'http://188.166.221.219:5000/api/events';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
$jsonData = array(
    'code' =>  $_POST['code'],
    'event_name' =>  $_POST['nama'],
    'date'=> $_POST['date'],
    'note' => $_POST['myFile'],
);

//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

//Execute the request
$result = curl_exec($ch);

echo $result;
?>