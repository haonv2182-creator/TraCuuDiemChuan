# Website Tra Cứu Điểm Chuẩn Đại Học Việt Nam

Đây là đồ án môn **Lập trình Web**, được xây dựng nhằm hỗ trợ người dùng tra cứu điểm chuẩn đại học Việt Nam theo trường, ngành, năm, tổ hợp và phương thức xét tuyển.

Website được phát triển bằng **PHP, MySQL, HTML, CSS, Bootstrap và JavaScript**, chạy trên môi trường **XAMPP localhost**.

---

## Thành viên thực hiện

- Nguyễn Văn Hào
- Nguyễn Thế Anh

---

## Công nghệ sử dụng

- **Frontend:** HTML, CSS, Bootstrap, JavaScript
- **Backend:** PHP
- **Database:** MySQL
- **Môi trường chạy:** XAMPP
- **Thư viện hỗ trợ:** Chart.js, Bootstrap Icons

---

## Chức năng chính

### Người dùng

- Tra cứu điểm chuẩn theo trường đại học
- Tra cứu điểm chuẩn theo ngành học
- Lọc dữ liệu theo năm, tổ hợp và phương thức xét tuyển
- Xem chi tiết trường đại học
- Xem chi tiết ngành học
- So sánh điểm chuẩn giữa các trường
- Gợi ý trường phù hợp theo mức điểm

### Quản trị viên

- Đăng nhập trang quản trị
- Xem dashboard thống kê dữ liệu
- Quản lý thông tin trường đại học
- Quản lý thông tin ngành học
- Quản lý dữ liệu điểm chuẩn
- Import dữ liệu từ file CSV
- Đăng xuất khỏi hệ thống

---

## Cấu trúc thư mục

```text
TraCuuDiemChuan/
│
├── admin/                  # Các trang quản trị
│
├── assets/                 # CSS, JavaScript, hình ảnh
│   ├── css/
│   ├── js/
│   └── images/
│
├── includes/               # Các file dùng chung
│   ├── db.php              # Kết nối cơ sở dữ liệu
│   ├── functions.php       # Các hàm xử lý chung
│   ├── header.php
│   └── footer.php
│
├── index.php               # Trang chủ
├── search.php              # Trang tra cứu nâng cao
├── university.php          # Trang chi tiết trường
├── major.php               # Trang chi tiết ngành
├── compare.php             # Trang so sánh điểm chuẩn
├── ai_recommend.php        # Trang gợi ý trường theo điểm
├── login.php               # Trang đăng nhập admin
└── README.md
```

---

## Cơ sở dữ liệu

Tên database sử dụng:

```sql
admission_system
```

Các bảng chính:

| Bảng | Chức năng |
|---|---|
| `users` | Lưu tài khoản quản trị viên |
| `universities` | Lưu thông tin trường đại học |
| `majors` | Lưu thông tin ngành học |
| `admission_scores` | Lưu dữ liệu điểm chuẩn |
| `ai_logs` | Lưu lịch sử gợi ý trường theo điểm |

Bảng `admission_scores` là bảng trung tâm, liên kết dữ liệu giữa trường đại học và ngành học.

---

## Cài đặt

1. Chép thư mục `TraCuuDiemChuan` vào:

```text
C:\xampp\htdocs
```

2. Bật **Apache** và **MySQL** trong XAMPP.

3. Mở phpMyAdmin:

```text
http://localhost/phpmyadmin
```

4. Tạo database:

```sql
admission_system
```

5. Import file SQL của project vào database `admission_system`.

Ví dụ:

```text
database/admission_system.sql
```

hoặc file SQL mà nhóm nộp kèm source code.

6. Kiểm tra file cấu hình kết nối database:

```text
includes/db.php
```

Cấu hình mặc định khi chạy bằng XAMPP:

```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'admission_system');
define('DB_USER', 'root');
define('DB_PASS', '');
```

7. Truy cập website:

```text
http://localhost/TraCuuDiemChuan/
```

---

## Tài khoản quản trị demo

Dùng tài khoản sau để đăng nhập trang quản trị:

```text
Username: admin
Password: admin123
```

Trang đăng nhập:

```text
http://localhost/TraCuuDiemChuan/login.php
```

---

## Hướng dẫn sử dụng

### 1. Đối với người dùng

Người dùng truy cập:

```text
http://localhost/TraCuuDiemChuan/
```

Các chức năng có thể sử dụng:

- Tra cứu điểm chuẩn theo tên trường
- Tra cứu điểm chuẩn theo ngành học
- Lọc dữ liệu theo năm, tổ hợp và phương thức xét tuyển
- Xem chi tiết trường đại học
- Xem chi tiết ngành học
- So sánh điểm chuẩn giữa các trường/ngành
- Nhập điểm để nhận gợi ý trường phù hợp

### Cách tra cứu điểm chuẩn

1. Mở trang chủ website.
2. Nhập tên trường hoặc tên ngành cần tìm.
3. Bấm nút tìm kiếm.
4. Xem danh sách kết quả.
5. Bấm vào từng trường hoặc ngành để xem chi tiết.

### Cách so sánh điểm chuẩn

1. Vào trang so sánh điểm chuẩn.
2. Chọn thông tin cần so sánh.
3. Hệ thống hiển thị dữ liệu để người dùng đối chiếu điểm chuẩn.

### Cách sử dụng chức năng gợi ý trường

1. Vào trang gợi ý trường theo điểm.
2. Nhập mức điểm của người dùng.
3. Chọn tổ hợp hoặc phương thức xét tuyển.
4. Hệ thống trả về danh sách trường/ngành phù hợp để tham khảo.

---

## 2. Đối với quản trị viên

Quản trị viên truy cập:

```text
http://localhost/TraCuuDiemChuan/login.php
```

Đăng nhập bằng tài khoản demo:

```text
Username: admin
Password: admin123
```

Sau khi đăng nhập, quản trị viên có thể:

- Xem dashboard thống kê dữ liệu
- Thêm, sửa, xóa thông tin trường đại học
- Thêm, sửa, xóa thông tin ngành học
- Quản lý dữ liệu điểm chuẩn
- Import dữ liệu từ file CSV
- Đăng xuất khỏi hệ thống

### Quản lý trường đại học

1. Đăng nhập vào trang quản trị.
2. Chọn mục quản lý trường đại học.
3. Thêm mới, chỉnh sửa hoặc xóa thông tin trường.
4. Lưu thay đổi để cập nhật vào cơ sở dữ liệu.

### Quản lý ngành học

1. Chọn mục quản lý ngành học.
2. Thêm mới hoặc chỉnh sửa ngành học.
3. Lưu dữ liệu sau khi cập nhật.

### Quản lý điểm chuẩn

1. Chọn mục quản lý điểm chuẩn.
2. Thêm hoặc chỉnh sửa điểm chuẩn theo trường, ngành, năm, tổ hợp và phương thức xét tuyển.
3. Kiểm tra dữ liệu trước khi lưu.

### Import dữ liệu CSV

1. Chuẩn bị file CSV đúng định dạng.
2. Vào mục import CSV trong trang quản trị.
3. Chọn file CSV cần import.
4. Bấm import để hệ thống tự động thêm dữ liệu vào database.

---

## Một số giao diện chính

- Trang chủ tra cứu
- Trang tra cứu nâng cao
- Trang chi tiết trường đại học
- Trang chi tiết ngành học
- Trang so sánh điểm chuẩn
- Trang gợi ý trường theo điểm
- Trang đăng nhập quản trị
- Trang dashboard admin
- Trang quản lý trường đại học
- Trang quản lý ngành học
- Trang quản lý điểm chuẩn
- Trang import dữ liệu CSV

---

## Lưu ý khi sử dụng

- Cần bật Apache và MySQL trong XAMPP trước khi chạy website.
- Cần import database trước khi sử dụng các chức năng tra cứu.
- Nếu không kết nối được database, kiểm tra lại file `includes/db.php`.
- Nếu giao diện bị lỗi CSS hoặc JavaScript, kiểm tra lại thư mục `assets`.
- Không nên xóa dữ liệu quan trọng khi đang demo.
- Khi upload lên hosting, cần sửa lại thông tin kết nối database cho đúng với hosting.

---

## Hướng dẫn triển khai lên hosting

Khi đưa website lên hosting như InfinityFree hoặc hosting PHP/MySQL khác, cần thực hiện:

1. Upload toàn bộ source code lên thư mục public của hosting.
2. Tạo database MySQL trên hosting.
3. Import file SQL vào database vừa tạo.
4. Sửa thông tin kết nối database trong file:

```text
includes/db.php
```

Ví dụ cấu hình online:

```php
define('DB_HOST', 'ten_host_database');
define('DB_NAME', 'ten_database');
define('DB_USER', 'ten_user_database');
define('DB_PASS', 'mat_khau_database');
```

Sau khi cấu hình xong, truy cập domain hosting để kiểm tra website.

---

## Hướng phát triển

- Bổ sung dữ liệu điểm chuẩn đầy đủ hơn
- Triển khai website lên hosting chính thức
- Tối ưu giao diện responsive cho điện thoại
- Cải thiện thuật toán gợi ý trường theo điểm
- Thêm chức năng tài khoản người dùng cá nhân
- Tự động cập nhật dữ liệu tuyển sinh từ nguồn chính thức
- Bổ sung chức năng xuất báo cáo hoặc thống kê nâng cao

---

## Mục đích thực hiện

Đồ án giúp sinh viên vận dụng các kiến thức của môn **Lập trình Web**, bao gồm:

- Thiết kế giao diện website
- Xử lý form bằng PHP
- Kết nối và truy vấn cơ sở dữ liệu MySQL
- Xây dựng chức năng quản trị
- Tổ chức mã nguồn theo từng nhóm chức năng
- Thực hành triển khai website trên môi trường localhost

---

## Ghi chú

Project được xây dựng phục vụ mục đích học tập và demo đồ án môn **Lập trình Web**.