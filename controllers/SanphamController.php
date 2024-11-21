<?php
class SanPhamController
{

    //Ket noi den file model
    public $modelSanPham;
    public function __construct()
    {
        $this->modelSanPham = new SanPham();
    }
    public function index()
    {
        $listSanPham = $this->modelSanPham->getAllSanPham();
        require_once './views/danhsachsanpham.php';
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
                $timKiemSanPham = $this->modelSanPham->getAll();
            }
    
            // Gửi danh sách sản phẩm tới view
            
            require_once './views/sanpham/tim_kiem_san_pham.php';
        }
    }
}
