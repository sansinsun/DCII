<?php
$url = 'http://188.166.221.219:5000/api/registry';

// read file

// decode json to array
$json_arr = json_decode($url, true);


foreach ($json_arr as $a => $value) {
    if ($value['ccode'] = $a) {
        $json_arr[$a]['code'] =>  $_POST['code'],
        $json_arr[$a]['building'] =>  $_POST['gedung'],
        $json_arr[$a]['floor'] => $_POST['lantai'],
        $json_arr[$a]['room'] => $_POST['room'],
        $json_arr[$a]['c_type'] =>  $_POST['ct'],
        $json_arr[$a]['cubicle'] => $_POST['cb'],
        $json_arr[$a]['component'] =>  $_POST['ce'],
        $json_arr[$a]['date'] =>  $_POST['cd'],
        $json_arr[$a]['notes'] =>  $_POST['cn']
    }
}

// encode array to json and save to file
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($json_arr)));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_POSTFIELDS,$json_arr);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response  = curl_exec($ch);
curl_close($ch);

var_dump($_POST)
?>
