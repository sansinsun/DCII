<?php



//API Url
$url = 'http://188.166.221.219:5000/api/registry';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
$jsonData = array(
    'building' =>  $_POST['gedung'],
    'floor' => $_POST['lantai'],
    'room' => $_POST['room'],

    'c_type' =>  $_POST['c_type'],
    'cubicle' => $_POST['cabinet'],

    'component' =>  $_POST['element'],
    'date' =>  $_POST['installDate'],
    'notes' =>  $_POST['notes']
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

header("Location: add_component.php");
?>