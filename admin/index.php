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
require_once 'controllers/NguoiDungController.php';
require_once 'controllers/KhuyenMaiController.php';



// Require toàn bộ file Models
require_once 'models/DanhMuc.php';
require_once 'models/Banner.php';
require_once 'models/LienHe.php';
require_once 'models/TinTuc.php';
require_once 'models/NguoiDung.php';
require_once 'models/KhuyenMai.php';




// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Dashboards

    'dashboard'                    => (new DashboardController())->index(),

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
    
    //Quan li lien he
    'lien-he'                  => (new LienHeController())->index(),
    'form-them-lien-he'         => (new LienHeController())->create(),
    'them-lien-he'              => (new LienHeController())->store(),
    'form-sua-lien-he'          => (new LienHeController())->edit(),
    'sua-lien-he'               => (new LienHeController())->update(),
    'xoa-lien-he'               => (new LienHeController())->destroy(),
    
    //Quan li Nguoi Dung
    'nguoi-dungs'              => (new NguoiDungController())->index(),
    'form-them-nguoi-dung'     => (new NguoiDungController())->create(),
    'them-nguoi-dung'          => (new NguoiDungController())->store(),
    'form-sua-nguoi-dung'      => (new NguoiDungController())->edit(),
    'sua-nguoi-dung'           => (new NguoiDungController())->update(),
    'xoa-nguoi-dung'           => (new NguoiDungController())->destroy(),

    //Quan li khuyen mai
    'khuyen-mais'            => (new KhuyenMaiController())->index(),
    'form-them-khuyen-mai'   => (new KhuyenMaiController())->create(),
    'them-khuyen-mai'        => (new KhuyenMaiController())->store(),
    'form-sua-khuyen-mai'    => (new KhuyenMaiController())->edit(),
    'sua-khuyen-mai'         => (new KhuyenMaiController())->update(),
    'xoa-khuyen-mai'         => (new KhuyenMaiController())->destroy(),

};
