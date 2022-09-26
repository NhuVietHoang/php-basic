# PHP Basic 
thực hiện bởi :Nhữ Việt Hoàng
# key word 
nginx vs apache
* nginx:là phần mềm nguồn mở làm web server ngoài các tính năng của một máy chủ HTTP, Nginx cũng có thể hoạt động như một máy chủ proxy cho email (IMAP, POP3 và SMTP) và một trình cân bằng tải (load balancer) và proxy ngược (reverse proxy) cho các máy chủ HTTP, TCP và UDP .
* apache:là chương trình máy chủ HTTP là một chương trình dành cho máy chủ đối thoại qua giao thức HTTP

* PHP-FPM là chương trình có chức năng phiên dịch php khi chạy trang web cho web server cho phép tăng tốc PHP lên gấp nhiều lần, đặc biệt phù hợp với các web server có lưu lượng truy cập lớn.

* web stacks: là tập hợp các công nghệ , ứng dụng phần mềm thường dùng để phát triển các ứng dụng web, thực hiện các trang web.

# HTML5 
là một ngôn ngữ cấu trúc và trình bày nội dung cho World Wide Web. Đây là phiên bản thứ 5 của ngôn ngữ HTML, được giới thiệu bởi World Wide Web Consortium (W3C). HTML5 vẫn sẽ giữ lại những đặc điểm cơ bản của HTML4 và bổ sung thêm các đặc tả nổi trội của XHTML, DOM cấp 2, đặc biệt là JavaScript.

# php data type
có 7 kiểu dữ liệu trong php 
* 1.Int 
khai báo cho cả số nguyên và số âm
```php

$thap_phan = 123; // Số thập phân
$so_am = -123; // Số âm
$bat_phan = 0123; // số bát phân
$thap_luc_phan = 0x1A; // và số thập lục phân

```

* 2.Kiểu dữ liệu boolean

là kiểu dữ liệu đơn giản chỉ có 2 giá trị là True or False

```php
    $result = True; // biến $result có kiểu giữ liệu là boolean có giá trị là true

```

* Kiểu dữ liệu số thực
    Là những số có thêm phần dư
    ```php
        $a=1.234;
    ```
* Kiểu dữ liệu chuỗi;
    gồm chuỗi(string) và char(kí tự)

* kiểu mảng
    trong PHP kiểu dữ liệu mảng gồm các phần từ có thể không cùng kiểu dữ liệu 

    ```php
        <?php
    $ten_mang = array(); // khởi tạo một mảng gán vào biến $ten_mang
    ?>

    ```
* kiểu null
 nó mang giá trị rỗng và gán phần tử bằng NUll

* kiểu object

# PHP Variables, Constants and Array    
 * Variables là giá trị dữ liệu có thể thay đổi được trong chương trình
 * Constants là hằng số để lưu trữ các giá trị cố định
 * array đã nói ở trên

# String funcions

*   strlen($string): lấy độ dài 1 chuỗi
VD:
```php
    $intern = "Nhu Viet Hoang-dok123 TTS IT";
    $TTS = "123";
    echo strlen($intern)."<br>";
```
kết quả: 28

*   strrev(): Đảo ngược chuỗi
VD:
```php
    $intern = "Nhu Viet Hoang-dok123 TTS IT";
    $TTS = "123";
    echo strrev($TTS)."<br>";
```
kết quả: 321
*   strtolower(): chuyển toàn bộ chuỗi về chữ thường
VD:
```php
    $intern = "Nhu Viet Hoang-dok123 TTS IT";
    $TTS = "123";
    echo strtolower($intern)."<br>";
```
kết quả: nhu viet hoang-dok123 tts it
*   strtoupper(): chuyển toàn bộ chuỗi thành chữ in hoa
VD:
```php
    $intern = "Nhu Viet Hoang-dok123 TTS IT";
    $TTS = "123";
    echo strtoupper($intern)."<br>";
```
NHU VIET HOANG-DOK123 TTS IT
*   str_repalce('find','replace','$string'): tìm và thay thế văn bản trong 1 chuỗi
```php
    $intern = "Nhu Viet Hoang-dok123 TTS IT";
    $TTS = "123";
    echo str_replace("TTS","Thực tập sinh", "$intern")."<br>";
```
kết quả: Nhu Viet Hoang-dok123 Thực tập sinh IT
*   str_repeat($string,repeat): Lặp lại chuỗi.
```php
    $intern = "Nhu Viet Hoang-dok123 TTS IT";
    $TTS = "123";
    echo str_repeat("$intern",3)."<br>";
```
kết quả: Nhu Viet Hoang-dok123 TTS ITNhu Viet Hoang-dok123 TTS ITNhu Viet Hoang-dok123 TTS IT


# Array functions

*   array_push(): chèn phần tử vào cuối mảng
```php
    $mang = ['honda','suzuki','dream'];
    array_push($mang,'audi');
    var_dump($mang);
    echo "<br>";
```
kết quả:
array(4) { [0]=> string(5) "honda" [1]=> string(6) "suzuki" [2]=> string(5) "dream" [3]=> string(4) "audi" } 

*   array_unshift(): chèn phần tử vào đầu mảng
```php
    $mang = ['honda','suzuki','dream','audi'];
    array_unshift($mang,'bycle');
    var_dump($mang);
    echo "<br>";
```
kết quả:
array(5) { [0]=> string(5) "bycle" [1]=> string(5) "honda" [2]=> string(6) "suzuki" [3]=> string(5) "dream" [4]=> string(4) "audi" } 

*   array_pop(): xoá phần tử cuối mảng
```php
    $mang = ['honda','suzuki','dream'];
    array_pop($mang);
    var_dump($mang);
    echo "<br>";
```
kết quả :
array(4) { [0]=> string(5) "bycle" [1]=> string(5) "honda" [2]=> string(6) "suzuki" [3]=> string(5) "dream" } 

*   array_shift(): xoá phần tử đầu mảng
```php
    $mang = ['honda','suzuki','dream'];
    var_dump($mang);
    echo "<br>";
```
kết quả:
array(3) { [0]=> string(5) "honda" [1]=> string(6) "suzuki" [2]=> string(5) "dream" } 

*   count($ten_mang): đếm số phần tử trong mảng
```php
    $mang = ['honda','suzuki','dream'];
    count($mang);
    echo "<br>";
```
kết quả: 3

# Loop, if else
## Loop while vs do while
* while 
```php
    while ($condition) {
        // dòng lệnh;
    }
```

* do while 
```php
    do {
    // dòng lệnh;
} while ($condition);
```

* foreach
dùng để lặp các phần tử trong mảng php 
```php
forearch($array as $key => $value)
{
    // các dòng lệnh ;
}
```

* switch case
``` php
    switch ($variable) {
    case $value_1:
       // chuỗi câu lênh
       break;
    case $value_2:
        // chuỗi câu lệnh
        break;
    default:
        // chuỗi câu lệnh
    

```
* 

