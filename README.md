# Trang tra cứu đơn hàng — Laravel

Gói này tương thích với source Laravel 9 hiện có trên `kimthanhtinlogistics.vn`.

## Vị trí cài đặt

1. Chép file:

   `resources/views/frontend/pages/tra-cuu-don-hang.blade.php`

   vào:

   `/home/kimthanhtinlogistics/htdocs/kimthanhtinlogistics.vn/resources/views/frontend/pages/tra-cuu-don-hang.blade.php`

2. Thêm nội dung trong `routes/tra-cuu-don-hang.php` vào `routes/web.php`.

3. Route phải được đặt phía trên route động cuối file:

   `Route::get('{slug}', 'KeyController@checkKey')->name('checkKey');`

4. Xoá cache route/view sau khi triển khai:

   `php artisan optimize:clear`

## URL sau khi cài đặt

`https://kimthanhtinlogistics.vn/tra-cuu-don-hang`

Trang tải dữ liệu mới nhất từ Google Sheets mỗi lần khách hàng bấm **Tra cứu**.

## CI/CD GitHub Actions

Workflow `.github/workflows/deploy.yml` kiểm tra cú pháp PHP và tự động triển khai khi nhánh `main` có commit mới.

Repository cần các Actions Secrets:

- `DEPLOY_HOST`: địa chỉ IP server
- `DEPLOY_USER`: site user CloudPanel
- `DEPLOY_PORT`: `22`
- `DEPLOY_PATH`: `/home/kimthanhtinlogistics/htdocs/kimthanhtinlogistics.vn`
- `DEPLOY_SSH_KEY`: private deploy key dành riêng cho GitHub Actions
