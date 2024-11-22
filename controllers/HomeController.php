<?php
class HomeController
{
    public $modelSanPham;
    public $modelBanner;

    public $modelTinTuc;

    public function __construct()
    {
        $this->modelSanPham = new SanPham();
        $this->modelBanner = new Banner();
        $this->modelTinTuc = new TinTuc();
    }
    public function home()
    {
        $listSanPham = $this->modelSanPham->getAllSanPham();
        $listBanner = $this->modelBanner->getAllBanner();
        $TinTucs = $this->modelTinTuc->getAllTinTuc();
        // var_dump($listBanner);

        require_once "./views/Home.php";
    }
    public function index() {}
}
