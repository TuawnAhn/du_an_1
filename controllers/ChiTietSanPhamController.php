<?php
class ChiTietSanPhamController
{

    //Ket noi den file model
    public $modelchiTietSanPham;
    public function __construct()
    {
        $this->modelchiTietSanPham = new ChiTietSanPham();
    }
    public function chitietsanpham($san_pham_id)
    {

        $chiTietSanPham = $this->modelchiTietSanPham->getAllChiTietSanPham($san_pham_id);
        // var_dump($chiTietSanPham);
        require_once './views/chitietsanpham.php';
    }
}
