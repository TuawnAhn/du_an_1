<?php

// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/HomeController.php';
require_once './controllers/BannerController.php';
require_once './controllers/SanPhamController.php';
require_once './controllers/ChiTietSanPhamController.php';
<<<<<<< HEAD
require_once './controllers/LienHeController.php';
require_once './controllers/KhuyenMaiController.php';
=======
require_once './controllers/TinTucController.php';

>>>>>>> c7d79360feb2f4293ba7b2031d08177456484b43
// Require toàn bộ file Models
require_once './models/SanPham.php';
require_once './models/Banner.php';
require_once './models/SanPham.php';
require_once './models/ChiTietSanPham.php';
<<<<<<< HEAD
require_once './models/LienHe.php';
require_once './models/KhuyenMai.php';
=======
require_once './models/TinTuc.php';

>>>>>>> c7d79360feb2f4293ba7b2031d08177456484b43

// Route
$act = $_GET['act'] ?? '/';
$id = $_GET['id'] ?? null; // Lấy ID từ URL, nếu không có thì gán giá trị null

// Xử lý match
match ($act) {
    // Trang chủ
    'home'                       => (new HomeController())->home(),


    'tim-kiem-san-pham'       => (new SanPhamController())->search(),
    'banner'                     => (new BannerController())->banner(),
    'tin-tuc'                   => (new TinTucController())->tintuc(),

    // Danh sách sản phẩm
    'danhsachsanpham'      => (new SanPhamController())->sanpham(),
    'danh-muc-san-pham'      => (new SanPhamController())->sanpham(),

    // Chi tiết sản phẩm
    'chitietsanpham'       => $id ? (new ChiTietSanPhamController())->chitietsanpham($id) : print("ID sản phẩm không hợp lệ."),

    // Lien he
    'lien-he'  => (new LienHeController())->view(),
    'add-lien-he'  => (new LienHeController())->store(),

    // Khuyen mai
    'khuyen-mai' => (new KhuyenMaiController())->view(),



     // Mặc định
    default                => print("Hành động không hợp lệ."),
};
