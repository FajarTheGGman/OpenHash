<?php
include "banner.php";
echo "Masukan teks yang mau di hash : ";
$jum = trim(fgets(STDIN));
$url = file_get_contents("http://indosec.web.id/api/ultra_hash.php?action=enc&value=$jum");
$url1 = explode("<br>",$url);
foreach ($url1 as $key){
$js = json_decode($key,true);
print_r($js);
}
