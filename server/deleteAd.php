<?php 

$id = $_GET['ID'];
$db_file = "ads.txt";
$file_arr = file($db_file);

foreach($file_arr as $key => $value){
    $ads = explode("/!/", $file_arr[$key]);
    if($ads[0] == $id){
        unset($file_arr[$key]);
        $fileOpen = @fopen($db_file,"w");
        fputs($fileOpen,implode("",$file_arr)); 
        fclose($fileOpen);
    }
}

header("Location: ../index.html");

?>