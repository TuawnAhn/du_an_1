<?php
class HomeController
{
    public $modelSanPham;

    public function __construct()
    {
        $this->modelSanPham = new SanPham();
    }
    public function home()
    {
        require_once "./views/Home.php";
    }
    public function index()
    {
        // require_once "./views/home/index.php";
    }
}
