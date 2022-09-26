<?php
$mang = ['honda','suzuki','dream'];

/*
push() chèn phần tử vào cuối mảng
*/
array_push($mang,'audi');
var_dump($mang);
echo "<br>";
/*
array_unshift() chèn phần tử vào đầu mảng
*/

array_unshift($mang,'bycle');
var_dump($mang);
echo "<br>";

/*
*/

array_pop($mang);
var_dump($mang);
echo "<br>";

/**/
array_shift($mang);
var_dump($mang);
echo "<br>";
/*
*/
echo count($mang);



