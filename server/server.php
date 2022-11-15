<?php

$filename = './ads.txt';

$ad_name = $_POST['ad_name'];
$ad_description = $_POST['ad_description'];
$ad_price = $_POST['ad_price'];
$ad_file = $_FILES['ad_file'];

print_r($ad_file);

$db_file = "ads.txt";
$file_arr = file($db_file);
$lines = count($file_arr);

if($ad_file != null){
    copy($ad_file['tmp_name'], './images/' . $lines . '_' . $ad_file['name']);
}

$new_str = $lines . "/!/" . $ad_name . "/!/" . $ad_description . "/!/" . $ad_price . "/!/" .  './server/images/' . $lines . '_' . $ad_file['name'];
$string = str_replace(array("\n","\r"), '', $new_str);

file_put_contents($db_file, PHP_EOL . $string, FILE_APPEND);

header('Location: ../index.html');

?>