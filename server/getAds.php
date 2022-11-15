<?php 

$db_file = "ads.txt";
$file_arr = file($db_file);

foreach ($file_arr as $key => $value) {
    $ads = explode("/!/", $file_arr[$key]);

    echo '
    <div class="ad" id=' . $ads[0] . '>
        <img src=' . $ads[4] . ' class="ad_img">
        <div class="description_div">
            <a href="detail.php" class="ad_title">' . $ads[1] . '</a>
            <p class="ad_description">' . $ads[2] . '</p>
            <p class="price">' . $ads[3] . '</p>
            <button class="remove_btn">Удалить</button>
        </div>
    </div>
    ';
}

?>