<?php
date_default_timezone_set("Asia/Aden");

echo "الوقت الحالي: " . date("Y-m-d H:i:s") . "<br>";

$filename = "data.txt";

$file = fopen($filename, "w");
fwrite($file, "تم التسجيل في: " . date("Y-m-d H:i:s"));
fclose($file);

$file = fopen($filename, "r");
echo "محتوى الملف:<br>";
echo fread($file, filesize($filename));
fclose($file);
?>
