<?php
class HomeController
{
    public $modelSanPham;
    public $modelBanner;
    public  $modelGioHang;
    public $modelTaiKhoan;


    public $modelTinTuc;

    public $modelDonHang;

    public function __construct()
    {
        $this->modelSanPham = new SanPham();
        $this->modelBanner = new Banner();
        $this->modelTinTuc = new TinTuc();
        $this->modelGioHang = new GioHang();

        $this->modelDonHang = new DonHang();

        $this->modelTaiKhoan = new TaiKhoan();
    }
    public function home()
    {
        $listSanPham = $this->modelSanPham->getAllSanPham();
        $listBanner = $this->modelBanner->getAllBanner();
        $TinTucs = $this->modelTinTuc->getAllTinTuc();

        $listDanhMuc = $this->modelSanPham->getAllDanhMuc();

       
        // var_dump($listMota);

        $listMota = $this->modelSanPham->getAllMota();



        // var_dump($listBanner);
        // require_once "./views/sanpham/tim_kiem_san_pham.php";
        require_once "./views/Home.php";
    }

 

    public function chiTietMuahang()
    {
        $listChiTietDonHang = $this->modelDonHang->getAllChiTietDonHang();
        // var_dump($listChiTietDonHang);
        require_once "./views/chiTietDonHang.php";
    }
    public function index() {}
    public function addGioHang(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_SESSION['user_client'])){
                $email = $this->modelTaiKhoan->getAllTaiKhoanformEmail($_SESSION['user_client']);
                $gioHang = $this->modelGioHang->getGioHangFromUser($email['id']);
                if(!$gioHang){
                    $gioHangId  = $this->modelGioHang->addGioHang($email['id']);
                    $gioHang = ['id'=>$gioHangId];
                }else{
                    $chiTietGioHang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
                }

                // $chiTietGioHang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
           
                $san_pham_id= $_POST['san_pham_id'];
                $so_luong= $_POST['so_luong'];
                $checkSanPham = false;
                foreach($chiTietGioHang as $detail){
                    if($detail['san_pham_id'] == $san_pham_id){
                        $newSoLuong = $detail['so_luong'] + $so_luong;
                        $this->modelGioHang->updateSoLuong($gioHang['id'], $san_pham_id, $newSoLuong);
                        $checkSanPham = true;
                        break;
                    }
                }
                if(!$checkSanPham){
                    $this->modelGioHang->addDetailGioHang($gioHang['id'],$$san_pham_id,$so_luong);
                    
                }
                header("location: ?act=gio-hang");
        }else{
            var_dump('Chua dang nhap');die;
        }
           
    }
}
public function gioHang(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_SESSION['user_client'])){
            $email = $this->modelTaiKhoan->getAllTaiKhoanformEmail($_SESSION['user_client']);
            $gioHang = $this->modelGioHang->getGioHangFromUser($email['id']);
            if(!$gioHang){
                $gioHangId  = $this->modelGioHang->addGioHang($email['id']);
                $gioHang = ['id'=>$gioHangId];
            }else{
                $chiTietGioHang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
            }

            // $chiTietGioHang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
       require_once './views/gioHang.php';
          
    }else{
        var_dump('Chua dang nhap');die;
    }
       
}
}
}
