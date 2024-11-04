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
require_once 'controllers/TinTucController.php';



// Require toàn bộ file Models
require_once 'models/DanhMuc.php';
require_once 'models/Banners.php';
require_once 'models/TinTuc.php';

// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Dashboards
    //'/'                 => (new DashboardController())->index(),

    'danh-mucs'         => (new DanhMucController())->index(),
    'form-them-danh-muc' => (new DanhMucController())->create(),
    'them-danh-muc'     => (new DanhMucController())->store(),
    'form-sua-danh-muc' => (new DanhMucController())->edit(),
    'sua-danh-muc'      => (new DanhMucController())->update(),
    'xoa-danh-muc'      => (new DanhMucController())->destroy(),
    'banner'            => (new BannerController())->index(),
    'lien-he' => (new ContactController())->index(),
    'tin-tucs'                  => (new TinTucController())->index(),
    'form-them-tin-tuc'         => (new TinTucController())->create(),
    'them-tin-tuc'              => (new TinTucController())->store(),
    'form-sua-tin-tuc'          => (new TinTucController())->edit(),
    'sua-tin-tuc'               => (new TinTucController())->update(),
    'xoa-tin-tuc'               => (new TinTucController())->destroy(),
}; 

