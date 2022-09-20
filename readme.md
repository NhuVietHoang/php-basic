# PHP Basic 
thực hiện bởi :Nhữ Việt Hoàng
# key word 
nginx vs apache
* nginx:là phần mềm nguồn mở làm web server ngoài các tính năng của một máy chủ HTTP, Nginx cũng có thể hoạt động như một máy chủ proxy cho email (IMAP, POP3 và SMTP) và một trình cân bằng tải (load balancer) và proxy ngược (reverse proxy) cho các máy chủ HTTP, TCP và UDP .
* apache:là chương trình máy chủ HTTP là một chương trình dành cho máy chủ đối thoại qua giao thức HTTP

* PHP-FPM cho phép tăng tốc PHP lên gấp nhiều lần, đặc biệt phù hợp với các web server có lưu lượng truy cập lớn.

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

