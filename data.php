<?php
$url = $_GET['url'];
$durl = $_GET['durl'];
$str = file_get_contents($url);
$str = str_replace('"/', '"'.$durl, $str,$n);
$str = str_replace('"./', '"'.$durl, $str,$n);
echo "<title>Powerd by 314@misskey.io</title>";
echo $str;
?>
