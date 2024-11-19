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
}
