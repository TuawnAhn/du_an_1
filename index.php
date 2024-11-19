<?php

// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/HomeController.php';
require_once './controllers/BannerController.php';
require_once './controllers/SanPhamController.php';
require_once './controllers/ChiTietSanPhamController.php';

// Require toàn bộ file Models
require_once './models/SanPham.php';
require_once './models/Banner.php';
require_once './models/SanPham.php';
require_once './models/ChiTietSanPham.php';

// Route
$act = $_GET['act'] ?? '/';
$id = $_GET['id'] ?? null; // Lấy ID từ URL, nếu không có thì gán giá trị null

// Xử lý match
match ($act) {
    // Trang chủ
    'home'                 => (new HomeController())->home(),
    'banner'               => (new BannerController())->banner(),

    // Danh sách sản phẩm
    'danhsachsanpham'      => (new SanPhamController())->sanpham(),

    // Chi tiết sản phẩm
    'chitietsanpham'       => $id ? (new ChiTietSanPhamController())->chitietsanpham($id) : print("ID sản phẩm không hợp lệ."),

        // Mặc định
    default                => print("Hành động không hợp lệ."),
};
