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
        $item_per_page = !empty($_GET['per_page']) ? (int)$_GET['per_page'] : 9;
        $current_page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

        // Lấy sản phẩm từ model
        $listSanPham = $this->modelSanPham->getAllSanPham($item_per_page, $current_page);
        $totalProducts = $this->modelSanPham->getTotalProducts();
        $totalPages = ceil($totalProducts / $item_per_page); // Tính số trang

        // Lấy danh mục sản phẩm
        $listDanhMuc = $this->modelSanPham->getAllDanhMuc();


        // Yêu cầu view danh sách sản phẩm

        $danhMucId = $_GET['iddm'] ?? 0; // Lấy id danh mục từ URL
        if (isset($_GET['iddm'])) {
            // Nhận tên sản phẩm từ form tìm kiếm
            $iddm = $_GET['iddm'];
    
            // Nếu có từ khóa tìm kiếm
            if (isset($iddm)) {
                // Gọi phương thức tìm kiếm từ model
                $listSanPhamById = $this->modelSanPham->getSanPhamByDanhMucId($danhMucId);
                
            } else {
                // Nếu không có từ khóa, hiển thị tất cả sản phẩm
                $listSanPhamById = $this->modelSanPham->getAllSanPham();
            }
    
            // Gửi danh sách sản phẩm tới view
            
            require_once './views/sanpham/danh_muc_san_pham.php';
        }
        
     
        // var_dump($danhmucs);

        require_once './views/danhsachsanpham.php';
        require_once 'views/sanpham/tim_kiem_san_pham.php';
    }
    public function search()
    {
        if (isset($_GET['tukhoa'])) {
            // Nhận tên sản phẩm từ form tìm kiếm
            $ten = $_GET['tukhoa'];
    
            // Nếu có từlistDanhMuc khóa tìm kiếm
            if (isset($ten)) {
                // Gọi phương thức tìm kiếm từ model
                $timKiemSanPham = $this->modelSanPham->searchByName($ten);
                $listDanhMuc = $this->modelSanPham->getAllDanhMuc();
            } else {
                // Nếu không có từ khóa, hiển thị tất cả sản phẩm
                $timKiemSanPham = $this->modelSanPham->getAllSanPham();
                $listDanhMuc = $this->modelSanPham->getAllDanhMuc();
            }
    
            // Gửi danh sách sản phẩm tới view
            
            require_once './views/sanpham/tim_kiem_san_pham.php';
        }
    }


}





