$url = 'http://188.166.221.219:5000/api/registry';

//Initiate cURL.
$ch = curl_init($url);
// decode json to associative array
$json_arr = json_decode($url, true);

// get array index to delete
$arr_index = array();
foreach ($json_arr as $key => $a) {
    if ($value['Code'] == $a) {
        $arr_index[] = $key;
    }
}

// delete data
foreach ($arr_index as $i) {
    unset($json_arr[$i]);
}

// rebase array
$json_arr = array_values($json_arr);

console.log();