<?php
class HomeController
{
    public $modelSanPham;
    public $modelBanner;
    public $modelTaiKhoan;
    public $modelTinTuc;

    public function __construct()
    {
        $this->modelSanPham = new SanPham();
        $this->modelBanner = new Banner();
        $this->modelTinTuc = new TinTuc();
        $this->modelTaiKhoan = new TaiKhoan();
    }
    public function home()
    {
        $listSanPham = $this->modelSanPham->getAllSanPham();
        $listBanner = $this->modelBanner->getAllBanner();
        $TinTucs = $this->modelTinTuc->getAllTinTuc();

        $listDanhMuc = $this->modelSanPham->getAllDanhMuc();
        // $listMota = $this->modelSanPham->getAllMota();
        // var_dump($listMota);


        // var_dump($listBanner);
        // require_once "./views/sanpham/tim_kiem_san_pham.php";
        require_once "./views/Home.php";
    }
    public function index() {}
    public function addGioHang(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_SESSION['user_client'])){
                $email = $this->modelTaiKhoan->getAllTaiKhoanformEmail($_SESSION['user_client']);
            }else{
                var_dump('Chua dang nhap');die;
            }
            
    }
}
}
