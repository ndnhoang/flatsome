<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */

define('DB_NAME', 'flatsome');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', 'nlstech888');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

define('FS_METHOD','direct');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`Jb/Hn6wNB?0]H5J&xzdZ >]#P[@bQV?jF<.I>JR}mG6$yv!rPWB+g`nHYHvxbhU');
define('SECURE_AUTH_KEY',  '$ I_83%/-a,@jYJ`{Jo=&R$6>[1NQaVu.rbR3F8$~:#Q=^Gdd$Zl17+A`|v^?.XG');
define('LOGGED_IN_KEY',    '? SCITS lJz_YZh-B(H29+%(IS%zV+,%8O38UW !UTu]2$]M@7ibq9^Ew=i74$*V');
define('NONCE_KEY',        '8@<sV+2h(iX}pr*&vCH{TyQt_mXYAf4udi`q:}mC!?%t+4G}7E58%Q_54DZMi-[O');
define('AUTH_SALT',        '^5@GOmqRr@COsBz%Zo;y+Tv4BL2{NwhE|pV|LR)u2lF@% [h1W@[o?w]HF!Q:(P{');
define('SECURE_AUTH_SALT', 'nKA1x0+N6~zn7JU&(,ME|=^q.%S9#Cu~ 61%C#(y`fwKdIOH;Pu%V1to9olB)NTe');
define('LOGGED_IN_SALT',   'wFT]{p&6r<vKn=c8bUIXIDqaw^ J>|j-V69hyLQ|J4t(`4C?22}JvZ0`1<T1w/#D');
define('NONCE_SALT',       'c*/BLQNK7sQpo;s{1KX[yA<T](T`l^DZRzA+)*SM^gIVr|kq{)`19+)<hdT:dbd,');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
