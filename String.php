<?php 
$intern = "Nhu Viet Hoang-dok123 TTS IT";
$TTS = "123";

/*
strlen trả về độ dài chuỗi-số  lượng kí tự
return int
*/
echo strlen($intern)."<br>";

/*
Strrev đảo ngược string
*/
echo Strrev($TTS)."<br>";

/*
Strrev chuyển chữ Hoa thành chữ thường
*/
echo  strtolower($intern)."<br>";

/*
strtoupper() chuyển chữ thường thành chữ hoa
*/

echo strtoupper($intern)."<br>";

/*
str_repalce() tìm kiếm trong string và thay thế
return về 1 chuỗi 1 mảng đã được thay thế so với ban đầu
*/

echo str_replace("TTS","Thực tập sinh", "$intern")."<br>";

/*
str_repeat() lặp lại chuỗi
*/
echo str_repeat("$intern",3);
