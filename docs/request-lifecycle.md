# Request Lifecycle cho /admin/products

```text
Browser GET /admin/products
    ↓
public/index.php
    ↓
Route
    ↓
ProductController@index
    ↓
View
    ↓
HTML response
```

- Browser gửi request tới URL `/admin/products`.
- Tệp public/index.php là điểm vào đầu tiên của ứng dụng.
- Laravel chuyển request qua hệ thống routing để tìm route phù hợp.
- Route gọi ProductController@index để chuẩn bị dữ liệu và trả về view.
- View render thành HTML và gửi lại cho trình duyệt.
