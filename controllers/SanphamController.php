<?php
class SanPhamController
{
    public $modelSanPham;

    public function __construct()
    {
        $this->modelSanPham = new SanPham();
    }

    public function sanpham()
    {
        // Lấy số sản phẩm mỗi trang và trang hiện tại từ URL
        $item_per_page = !empty($_GET['per_page']) ? (int)$_GET['per_page'] : 16;
        $current_page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

        // Lấy sản phẩm từ model
        $listSanPham = $this->modelSanPham->getAllSanPham($item_per_page, $current_page);
        $totalProducts = $this->modelSanPham->getTotalProducts();
        $totalPages = ceil($totalProducts / $item_per_page); // Tính số trang

        // Lấy danh mục sản phẩm
        $listDanhMuc = $this->modelSanPham->getAllDanhMuc();

        // Yêu cầu view danh sách sản phẩm
        require_once './views/danhsachsanpham.php';
    }
}