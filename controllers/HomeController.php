<?php
class HomeController
{
    public $modelSanPham;
    public $modelBanner;

    public $modelTaiKhoan;

    public $modelTinTuc;

    public $modelDonHang;
  
    public function __construct()
    {
        $this->modelSanPham = new SanPham();
        $this->modelBanner = new Banner();
        $this->modelTinTuc = new TinTuc();
        $this->modelTaiKhoan=new TaiKhoan();
        $this->modelDonHang = new DonHang();
        $this->modelTaiKhoan = new TaiKhoan();

    }
    public function home()
    {
        $listSanPham = $this->modelSanPham->getAllSanPham();
        $listBanner = $this->modelBanner->getAllBanner();
        $TinTucs = $this->modelTinTuc->getAllTinTuc();

        $listDanhMuc = $this->modelSanPham->getAllDanhMuc();
        $listMota = $this->modelSanPham->getAllMota();


        // var_dump($listBanner);
        // require_once "./views/sanpham/tim_kiem_san_pham.php";
        require_once "./views/Home.php";
    }

    // public function addGioHang()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         if (isset($_POST['user_client'])) {
    //             $id = $this->modelTaiKhoan->getAllTaiKhoanformEmail($_SESSION['user_client']);
    //             var_dump($id);
    //             die();
    //             $gioHang = $this->modelGioHang->getGioHangFromId($email['id']);
    //         } else {
    //             var_dump('khong tim thay email');
    //         }
    //     }
    //     $san_pham_id = $_POST['san_pham_id'];
    //     $so_luong = $_POST['so_luong'];
    // }

    public function chiTietMuahang()
    {
        $listChiTietDonHang = $this->modelDonHang->getAllChiTietDonHang();
        // var_dump($listChiTietDonHang);
        require_once "./views/chiTietDonHang.php";
    }
    public function index() {}

public function formLogin()
    {
        require_once './views/auth/formLogin.php';
        // deleteSessionError();
    }
    public function postLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->modelTaiKhoan->checkLogin($email, $password);
            if (gettype($user) != 'string') {
                if ($user['email'] == $email) {
                    $_SESSION['user_client'] = $user;
                  
                    
                        header("Location: /du_an_1/?act=home");
                        exit();
                   
                
            } else {
                $_SESSION['flash'] = $user;
                header("Location: ?act=login");
                exit();
            }
        }}}
    }
    
