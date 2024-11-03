<?php
session_start();
// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once 'controllers/DashboardController.php';
require_once 'controllers/DanhMucController.php';
<<<<<<< HEAD
require_once 'controllers/BannerController.php';
=======
require_once 'controllers/ContactController.php';
>>>>>>> 524c3ae967d66f66c4b545b8ecb86c0f4c819d37

// Require toàn bộ file Models
require_once 'models/DanhMuc.php';
require_once 'models/Banners.php';

// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Dashboards
    // '/'                 => (new DashboardController())->index(),

    'danh-mucs'         => (new DanhMucController())->index(),
    'form-them-danh-muc' => (new DanhMucController())->create(),
    'them-danh-muc'     => (new DanhMucController())->store(),
    'form-sua-danh-muc' => (new DanhMucController())->edit(),
    'sua-danh-muc'      => (new DanhMucController())->update(),
    'xoa-danh-muc'      => (new DanhMucController())->destroy(),
<<<<<<< HEAD
    'banner'            => (new BannerController())->index(),
   
};
=======
    'lien-he' => (new ContactController())->index(),
}; 
>>>>>>> 524c3ae967d66f66c4b545b8ecb86c0f4c819d37
