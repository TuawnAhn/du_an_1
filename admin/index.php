<?php
session_start();
// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once 'controllers/DashboardController.php';
require_once 'controllers/DanhMucController.php';
require_once 'controllers/BannerController.php';
require_once 'controllers/LienHeController.php';
require_once 'controllers/TinTucController.php';


// Require toàn bộ file Models
require_once 'models/DanhMuc.php';
require_once 'models/Banner.php';
require_once 'models/LienHe.php';

// Require toàn bộ file Models
require_once 'models/DanhMuc.php';
require_once 'models/Banner.php';
require_once 'models/TinTuc.php';


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

    //Quan li banner
    'banners'              => (new BannerController())->index(),
    'form-them-banner'     => (new BannerController())->create(),
    'them-banner'          => (new BannerController())->store(),
    'form-sua-banner'      => (new BannerController())->edit(),
    'sua-banner'           => (new BannerController())->update(),
    'xoa-banner'           => (new BannerController())->destroy(),

    //Quan li tin tuc
    'tin-tucs'                  => (new TinTucController())->index(),
    'form-them-tin-tuc'         => (new TinTucController())->create(),
    'them-tin-tuc'              => (new TinTucController())->store(),
    'form-sua-tin-tuc'          => (new TinTucController())->edit(),
    'sua-tin-tuc'               => (new TinTucController())->update(),
    'xoa-tin-tuc'               => (new TinTucController())->destroy(),

    'lien-he'                  => (new LienHeController())->index(),
    'form-them-lien-he'         => (new LienHeController())->create(),
    'them-lien-he'              => (new LienHeController())->store(),
    'form-sua-lien-he'          => (new LienHeController())->edit(),
    'sua-lien-he'               => (new LienHeController())->update(),
    'xoa-lien-he'               => (new LienHeController())->destroy(),
};
