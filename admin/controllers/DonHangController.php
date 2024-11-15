<?php
class DonHangController
{

    //Hàm kết nối tới Model

    public $modelDonHang;

    public function __construct()
    {
        $this->modelDonHang = new DonHang();
    }
    public function index()
    {
        $donhangs = $this->modelDonHang->getAll();


        require_once "./views/donhang/list_don_hang.php";
    }

    public function create()
    {
        require_once "./views/donhang/create_don_hang.php";
    }

    public function detail()
    {
        $don_hang_id = $_GET['id_don_hang'];

        $donhang = $this->modelDonHang->getDetailDonHang($don_hang_id);

        //Lay danh sach o bang chi tiet don hang
        $sanPhamDonHang = $this->modelDonHang->getListSpDonHang($don_hang_id);

        $listTrangThaiDonHang = $this->modelDonHang->getAllTrangThaiDonHang();



        require_once './views/donhang/chiTietDonHang.php';
    }

    public function edit()
    {
        $id = $_GET['id_don_hang'];
        $donhangs = $this->modelDonHang->getDetailDonHang($id);
        $listTrangThaiDonHang = $this->modelDonHang->getAllTrangThaiDonHang();
        if($donhangs){
            require_once "./views/donhang/edit_don_hang.php";
            deleteSessionError();
        }else{
            header("Location: ?act=don-hangs");
            exit();
        }
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id_don_hang'];
            $ho_ten_nguoi_nhan = $_POST['ho_ten_nguoi_nhan'];
            $sdt_nguoi_nhan = $_POST['sdt_nguoi_nhan'];
            $email_nguoi_nhan = $_POST['email_nguoi_nhan'];
            $dia_chi_nguoi_nhan = $_POST['dia_chi_nguoi_nhan'];
            $trang_thai_don_hang_id = $_POST['trang_thai_don_hang_id'];
            $ghi_chu = $_POST['ghi_chu'];

            // var_dump();

            $errors = [];

            if (empty($ho_ten_nguoi_nhan)) {
                $errors['ho_ten_nguoi_nhan'] = 'Hóa đơn hàng không được để trống';
            }

            if (empty($sdt_nguoi_nhan)) {
                $errors['sdt_nguoi_nhan'] = 'Sđt nguoi nhan không được để trống';
            }

            if (empty($email_nguoi_nhan)) {
                $errors['email_nguoi_nhan'] = 'Email nguoi nhan không được để trống';
            }

            if (empty($dia_chi_nguoi_nhan)) {
                $errors['dia_chi_nguoi_nhan'] = 'Đia chi nguoi nhan không được để trống';
            }


            if (empty($trang_thai_don_hang)) {
                $errors['trang_thai_don_hang_id'] = 'Trạng thái đơn hàng không được để trống';
            }

            if (empty($ghi_chu)) {
                $errors['ghi_chu'] = 'Ghi chú không được để trống';
            }

            if (empty($errors)) {
                $this->modelDonHang->updateData($id,  $ho_ten_nguoi_nhan, $sdt_nguoi_nhan, $email_nguoi_nhan, $dia_chi_nguoi_nhan,  $trang_thai_don_hang_id, $ghi_chu);
                unset($_SESSION['errors']);
                header("Location: ?act=don-hangs");
            } else {
                $_SESSION['errors'] = $errors;           
                header("Location: ?act=sua-don-hang&id_don_hang");
                exit();
            }
        }
    }

}
