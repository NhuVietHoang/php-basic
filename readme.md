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
*   strrev(): Đảo ngược chuỗi
*   strtolower(): chuyển toàn bộ chuỗi về chữ thường
*   strtoupper(): chuyển toàn bộ chuỗi thành chữ in hoa
*   str_repalce('find','replace','$string'): tìm và thay thế văn bản trong 1 chuỗi
*   str_repeat($string,repeat): Lặp lại chuỗi.

# Array functions

*   array_push(): chèn phần tử vào cuối mảng
*   array_unshift(): chèn phần tử vào đầu mảng
*   array_pop(): xoá phần tử cuối mảng
*   array_shift(): xoá phần tử đầu mảng
*   count($ten_mang): đếm số phần tử trong mảng

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

