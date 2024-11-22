<?php
class SanPhamController
{

    //Ket noi den file model
    public $modelSanPham;

    public function __construct()
    {
        $this->modelSanPham = new SanPham();
    }
    public function sanpham()
    {
        $listSanPham = $this->modelSanPham->getAllSanPham();
        $listDanhMuc = $this->modelSanPham->getAllDanhMuc();
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
        // require_once 'views/sanpham/tim_kiem_san_pham.php';
    }
    public function search()
    {
        if (isset($_GET['tukhoa'])) {
            // Nhận tên sản phẩm từ form tìm kiếm
            $ten = $_GET['tukhoa'];
    
            // Nếu có từ khóa tìm kiếm
            if (isset($ten)) {
                // Gọi phương thức tìm kiếm từ model
                $timKiemSanPham = $this->modelSanPham->searchByName($ten);
            } else {
                // Nếu không có từ khóa, hiển thị tất cả sản phẩm
                $timKiemSanPham = $this->modelSanPham->getAllSanPham();
            }
    
            // Gửi danh sách sản phẩm tới view
            
            require_once './views/sanpham/tim_kiem_san_pham.php';
        }
    }
    

}
