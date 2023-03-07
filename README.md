# THEME - HOLY 2023 - OPHIM CMS

## Demo
### Trang Chủ
![Alt text](https://i.ibb.co/0GnRNzW/THEME-HOLY-INDEX.png "Home Page")

### Trang Danh Sách Phim
![Alt text](https://i.ibb.co/TbKzKV2/THEME-HOLY-CATALOG.png "Catalog Page")

### Trang Thông Tin Phim
![Alt text](https://i.ibb.co/YW6yPYW/THEME-HOLY-SINGLE.png "Single Page")

### Trang Xem Phim
![Alt text](https://i.ibb.co/FXQhSQc/THEME-HOLY-EPISODES.png "Episode Page")

## Requirements
https://github.com/hacoidev/ophim-core

## Install
1. Tại thư mục của Project: `composer require ophimcms/theme-holy`
2. Kích hoạt giao diện trong Admin Panel

## Update
1. Tại thư mục của Project: `composer update ophimcms/theme-holy`
2. Re-Activate giao diện trong Admin Panel

## Note
- Một vài lưu ý quan trọng của các nút chức năng:
    + `Activate` và `Re-Activate` sẽ publish toàn bộ file js,css trong themes ra ngoài public của laravel.
    + `Reset` reset lại toàn bộ cấu hình của themes
    
## Document
### List
- Trang chủ: `display_label|display_description|relation|find_by_field|value|sort_by_field|sort_algo|limit|show_more_url`
    ```
    Phim đề cử|Những bộ phim đang được quan tâm nhiều nhất||is_recommended|1|updated_at|desc|20|#
    Phim chiếu rạp mới|Tổng hợp phim chiếu rạp vietsub||is_shown_in_theater|1|created_at|desc|10|/danh-sach/phim-chieu-rap
    Phim bộ mới|Phim bộ mới cập nhật||type|series|updated_at|desc|10|/danh-sach/phim-bo
    Phim lẻ mới|Phim lẻ mới cập nhật||type|single|updated_at|desc|10|/danh-sach/phim-le
    Phim hoạt hình mới|Phim hoạt hình mới cập nhật|categories|slug|hoat-hinh|updated_at|desc|10|/the-loai/hoat-hinh
    Top phim|Những phim được xem nhiều nhất||is_copyright|0|view_week|desc|10|#
    ```

### Custom View Blade
- File blade gốc trong Package: `/vendor/ophimcms/theme-holy/resources/views/themeholy`
- Copy file cần custom đến: `/resources/views/vendor/themes/themeholy`
