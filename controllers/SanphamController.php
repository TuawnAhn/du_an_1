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
        // var_dump($danhmucs);
        require_once './views/danhsachsanpham.php';
    }
}
