<?php
class HomeController
{
    public $modelSanPham;
    public $modelBanner;

    public function __construct()
    {
        $this->modelSanPham = new SanPham();
        $this->modelBanner = new Banner();
    }
    public function home()
    {
        $listSanPham = $this->modelSanPham->getAllSanPham();
        $listBanner = $this->modelBanner->getAllBanner();
        $listDanhMuc = $this->modelSanPham->getAllDanhMuc();
        $listMota = $this->modelSanPham->getAllMota();
        // var_dump($listMota);

        // var_dump($listBanner);

        require_once "./views/Home.php";
    }
    public function index() {}
}
