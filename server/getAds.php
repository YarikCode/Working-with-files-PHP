<?php 

$db_file = "ads.txt";
$file_arr = file($db_file);

foreach ($file_arr as $key => $value) { 
    $ads = explode("/!/", $file_arr[$key]);
    if(isset($ads[1])){
        echo '
        <div class="ad" id=' . $ads[0] . '>
            <img src=' . $ads[4] . ' class="ad_img">
            <div class="description_div">
                <p class="ad_title">' . $ads[1] . '</p>
                <p class="ad_description">' . $ads[2] . '</p>
                <p class="price">' . $ads[3] . '</p>
                <a href="./server/deleteAd.php?ID='. $ads[0] .'">
                    <button class="remove_btn">Удалить</button>
                </a>
            </div>
        </div>
        ';
    }
}

?>