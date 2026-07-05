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

Đăng nhập bằng tài khoản demo:

```text
Username: admin
Password: admin123
```
