<?php
session_start();
// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once 'controllers/DashboardController.php';
require_once 'controllers/DanhMucController.php';
require_once 'controllers/BannerController.php';
require_once 'controllers/ContactController.php';

// Require toàn bộ file Models
require_once 'models/DanhMuc.php';
require_once 'models/Banner.php';

// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Dashboards
    '/'                    => (new DashboardController())->index(),
    //Quan li danh muc
    'danh-mucs'            => (new DanhMucController())->index(),
    'form-them-danh-muc'   => (new DanhMucController())->create(),
    'them-danh-muc'        => (new DanhMucController())->store(),
    'form-sua-danh-muc'    => (new DanhMucController())->edit(),
    'sua-danh-muc'         => (new DanhMucController())->update(),
    'xoa-danh-muc'         => (new DanhMucController())->destroy(),
    //Quan li lien he
    // 'lien-he'              => (new ContactController())->index(),
    //Quan li banner
    'banners'              => (new BannerController())->index(),
    'form-them-banner'     => (new BannerController())->create(),
    'them-banner'          => (new BannerController())->store(),
    'form-sua-banner'      => (new BannerController())->edit(),
    'sua-banner'           => (new BannerController())->update(),
    'xoa-banner'           => (new BannerController())->destroy(),

}; 
