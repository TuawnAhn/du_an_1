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



        $this->modelTaiKhoan=new TaiKhoan();


         $this->modelDonHang = new DonHang();


    }
    public function home()
    {
        $listSanPham = $this->modelSanPham->getAllSanPham();
        $listBanner = $this->modelBanner->getAllBanner();
        $TinTucs = $this->modelTinTuc->getAllTinTuc();

        $listDanhMuc = $this->modelSanPham->getAllDanhMuc();

       
 

        $listMota = $this->modelSanPham->getAllMota();



        require_once "./views/Home.php";
    }

 

    public function chiTietMuahang()
    {
        $listChiTietDonHang = $this->modelDonHang->getAllChiTietDonHang();
        // var_dump($listChiTietDonHang);
        require_once "./views/chiTietDonHang.php";
    }
    public function index() {}
    public function addGioHang()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_SESSION['user'])) {
             
                $email = $this->modelTaiKhoan->getAllTaiKhoanformEmail($_SESSION['user']['email']);        
                $gioHang = $this->modelGioHang->getGioHangFromUser($email['id']);
                if (!$gioHang) {
                    $gioHangId  = $this->modelGioHang->addGioHang($email['id']);
                    $gioHang = ['id' => $gioHangId];
                } else {
                    $chiTietGioHang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
                }

    
                $san_pham_id = $_POST['san_pham_id'];
               
                $so_luong = $_POST['so_luong'];
    
                // Kiểm tra số lượng tồn kho (nếu cần)
    
    
                $checkSanPham = false;
                foreach ($chiTietGioHang as $detail) {
                    if ($detail['san_pham_id'] == $san_pham_id) {
                        $newSoLuong = $detail['so_luong'] + $so_luong;
                        $this->modelGioHang->updateSoLuong($gioHang['id'],$san_pham_id,$newSoLuong);
                        // Cập nhật số lượng (nếu cần thiết)
                        $checkSanPham = true;
                        break;
                       
                    }
                }
             
                if (!$checkSanPham) {
                    // Thêm sản phẩm mới vào giỏ hàng (nếu cần thiết)
                    $this->modelGioHang->addDetailGioHang($gioHang['id'], $san_pham_id, $so_luong);
                }
    
                header("Location: ?act=gio-hang");
               
            } else {
                var_dump('Chua dang nhap');die;
                
            }
        }
    }
  
        public function gioHang()
    {
      if (isset($_SESSION['user'])) {
        $email = $this->modelTaiKhoan->getAllTaiKhoanformEmail($_SESSION['user']['email']);
        $gioHang = $this->modelGioHang->getGioHangFromUser($email['id']);
        if (!$gioHang) {
          $gioHangId = $this->modelGioHang->addGioHang($email['id']);
          $gioHang = ['id' => $gioHangId];
          $chiTietGioHang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
        } else {
          $chiTietGioHang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
        }
          $listDanhMuc = $this->modelSanPham->getAllDanhMuc();;
          // var_dump($chiTietGioHang);
        require_once './views/gioHang.php';
       
      } else {
        
        header("Location: ?act=login");
      }
    }


    
    public function capNhatGioHang()
    {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {  // Kiểm tra nếu là yêu cầu POSTif (isset($_SESSION['user'])) {
        $mail = $this->modelTaiKhoan->getAllTaiKhoanformEmail($_SESSION['user']['email']);
$gioHang = $this->modelGioHang->getGioHangFromUser($mail['id']);
        $chiTietGioHang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
  
        // Kiểm tra nếu có dữ liệu số lượng mới gửi lên
        if (isset($_POST['so_luong'])) {
          foreach ($_POST['so_luong'] as $sanPhamId => $soLuongMoi) {
            // Kiểm tra số lượng còn lại trong kho
            $soLuongConLai = $this->modelSanPham->getAllSanPham($sanPhamId);
            if ($soLuongMoi > $soLuongConLai) {
              echo "<script>alert('Không đủ số lượng để cập nhật. Số lượng sản phẩm vượt quá tồn kho.'); window.history.back();</script>";
              exit();
            }
            // Cập nhật số lượng giỏ hàng
            $this->modelGioHang->updateSoLuong($gioHang['id'], $sanPhamId, $soLuongMoi);
          }
          header("Location:?act=gio-hang ");  // Điều hướng lại trang giỏ hàng
        }
      }
    }
  
  
  
    public function xoaSanPhamGioHang()
    {
      // var_dump($_POST);die;
  
      if (isset($_SESSION['user'])) {
        $mail = $this->modelTaiKhoan->getAllTaiKhoanformEmail($_SESSION['user']['email']);
        $gioHang = $this->modelGioHang->getGioHangFromUser($mail['id']);
  
        if ($gioHang) {
          // Lấy ID sản phẩm từ form POST
          $sanPhamId = isset($_POST['san_pham_id']) ? $_POST['san_pham_id'] : null;
  
          if ($sanPhamId) {
            // Xóa sản phẩm khỏi giỏ hàng
            $tatus = $this->modelGioHang->xoaSanPham($gioHang['id'], $sanPhamId);
          }
        }
        // Cập nhật lại giỏ hàng sau khi xóa
        $gioHang = $this->modelGioHang->getGioHangFromUser($mail['id']);
        $chiTietGioHang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
  
        header("Location: ?act=gio-hang ");
        exit();
      }
    }
    public function ThanhToan(){

      if (isset($_SESSION['user'])) {
        $user = $this->modelTaiKhoan->getAllTaiKhoanformEmail($_SESSION['user']['email']);
        $gioHang = $this->modelGioHang->getGioHangFromUser($user['id']);
        if (!$gioHang) {
          $gioHangId = $this->modelGioHang->addGioHang($user['id']);
          $gioHang = ['id' => $gioHangId];
          $chiTietGioHang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
        } else {
          $chiTietGioHang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
        }
          $listDanhMuc = $this->modelSanPham->getAllDanhMuc();;
          // var_dump($chiTietGioHang);
          require_once './views/thanhtoan.php';
       
      } else {
        
        header("Location: ?act=login");
      }
  

    }
  
    public function postThanhtoan() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $ho_ten_nguoi_nhan = $_POST['ho_ten_nguoi_nhan'];
        $email_nguoi_nhan = $_POST['email_nguoi_nhan'];
        $dia_chi_nguoi_nhan = $_POST['dia_chi_nguoi_nhan'];
        $sdt_nguoi_nhan = $_POST['sdt_nguoi_nhan'];
        $ghi_chu = $_POST['ghi_chu'];
        $phuong_thuc_thanh_toan_id = $_POST['phuong_thuc_thanh_toan_id'];
        $tong_tien = $_POST['tong_tien'];
        $ngay_dat_hang = date('Y-m-d H:i:s');
        $trang_thai_don_hang_id = 1;
        $user = $this->modelTaiKhoan->getAllTaiKhoanformEmail($_SESSION['user']['email']);
        $tai_khoan_id = $user['id'];
        $ma_don_hang = 'DH' . rand(100,999);
        
      }
      $result = $this->modelDonHang->addDonHang($ho_ten_nguoi_nhan, $email_nguoi_nhan, $dia_chi_nguoi_nhan, $sdt_nguoi_nhan, $ghi_chu, $phuong_thuc_thanh_toan_id, $tong_tien, $ngay_dat_hang, $trang_thai_don_hang_id, $tai_khoan_id, $ma_don_hang);
        
      if ($result) {
          $_SESSION['thong_bao'] = 'Đặt hàng thành công! Cảm ơn bạn đã mua sắm tại cửa hàng.';
          header("Location: ?act=danhsachsanpham");
      } 
    }
    



public function formLogin()
    {

      
        require_once './views/auth/formLogin.php';
        // deleteSessionError();
    }
   
    
    }   

