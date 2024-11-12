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

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ma_don_hang = $_POST['ma_don_hang'];
            $ho_ten_nguoi_nhan = $_POST['ho_ten_nguoi_nhan'];
            $sdt_nguoi_nhan = $_POST['sdt_nguoi_nhan'];
            $email_nguoi_nhan = $_POST['email_nguoi_nhan'];
            $dia_chi_nguoi_nhan = $_POST['dia_chi_nguoi_nhan'];
            $ngay_dat_hang = $_POST['ngay_dat_hang'];
            $trang_thai_don_hang = $_POST['trang_thai_don_hang'];
            $trang_thai_thanh_toan = $_POST['trang_thai_thanh_toan'];
            $phuong_thuc_thanh_toan = $_POST['phuong_thuc_thanh_toan'];
            $nguoi_dung_id = $_POST['nguoi_dung_id'];
            $trang_thai = $_POST['trang_thai'];

            // var_dump();

            $errors = [];

            if (empty($ma_don_hang)) {
                $errors['ma_don_hang'] = 'Mã đơn hàng không được để trống';
            }

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

            if (empty($ngay_dat_hang)) {
                $errors['ngay_dat_hang'] = 'Ngày đặt hàng không được để trống';
            }

            if (empty($trang_thai_don_hang)) {
                $errors['trang_thai_don_hang'] = 'Trạng thái đơn hàng không được để trống';
            }

            if (empty($trang_thai_thanh_toan)) {
                $errors['trang_thai_thanh_toan'] = 'Trạng thái thanh toán không được để trống';
            }

            if (empty($phuong_thuc_thanh_toan)) {
                $errors['phuong_thuc_thanh_toan'] = 'Phuong thức thanh toán không được để trống';
            }

            if (empty($nguoi_dung_id)) {
                $errors['nguoi_dung_id'] = 'Nguoi dung id không được để trống';
            }

            if (empty($trang_thai)) {
                $errors['trang_thai'] = 'Trạng thái không được để trống';
            }


            if (empty($errors)) {
                $this->modelDonHang->postDonHang($ma_don_hang, $ho_ten_nguoi_nhan, $sdt_nguoi_nhan, $email_nguoi_nhan, $dia_chi_nguoi_nhan, $ngay_dat_hang, $trang_thai_don_hang, $trang_thai_thanh_toan, $phuong_thuc_thanh_toan, $nguoi_dung_id, $trang_thai);
                unset($_SESSION['errors']);
                // echo "Lỗi";
                header("Location: ?act=don-hangs");
            } else {
                $_SESSION['errors'] = $errors;
                header("Location: ?act=form-them-don-hang");
                exit();
            }
        }
    }

    public function edit()
    {
        $id = $_GET['id'];
        $donhangs = $this->modelDonHang->getDetailData($id);

        require_once "./views/trangthaidonhang/edit_don_hang.php";
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $ma_don_hang = $_POST['ma_don_hang'];
            $ho_ten_nguoi_nhan = $_POST['ho_ten_nguoi_nhan'];
            $sdt_nguoi_nhan = $_POST['sdt_nguoi_nhan'];
            $email_nguoi_nhan = $_POST['email_nguoi_nhan'];
            $dia_chi_nguoi_nhan = $_POST['dia_chi_nguoi_nhan'];
            $ngay_dat_hang = $_POST['ngay_dat_hang'];
            $trang_thai_don_hang = $_POST['trang_thai_don_hang'];
            $trang_thai_thanh_toan = $_POST['trang_thai_thanh_toan'];
            $phuong_thuc_thanh_toan = $_POST['phuong_thuc_thanh_toan'];
            $nguoi_dung_id = $_POST['nguoi_dung_id'];
            $trang_thai = $_POST['trang_thai'];

            // var_dump();

            $errors = [];

            if (empty($ma_don_hang)) {
                $errors['ma_don_hang'] = 'Mã đơn hàng không được để trống';
            }

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

            if (empty($ngay_dat_hang)) {
                $errors['ngay_dat_hang'] = 'Ngày đặt hàng không được để trống';
            }

            if (empty($trang_thai_don_hang)) {
                $errors['trang_thai_don_hang'] = 'Trạng thái đơn hàng không được để trống';
            }

            if (empty($trang_thai_thanh_toan)) {
                $errors['trang_thai_thanh_toan'] = 'Trạng thái thanh toán không được để trống';
            }

            if (empty($phuong_thuc_thanh_toan)) {
                $errors['phuong_thuc_thanh_toan'] = 'Phuong thức thanh toán không được để trống';
            }

            if (empty($nguoi_dung_id)) {
                $errors['nguoi_dung_id'] = 'Nguoi dung id không được để trống';
            }

            if (empty($trang_thai)) {
                $errors['trang_thai'] = 'Trạng thái không được để trống';
            }

            if (empty($errors)) {
                $this->modelDonHang->updateData($id, $ma_don_hang, $ho_ten_nguoi_nhan, $sdt_nguoi_nhan, $email_nguoi_nhan, $dia_chi_nguoi_nhan, $ngay_dat_hang, $trang_thai_don_hang, $trang_thai_thanh_toan, $phuong_thuc_thanh_toan, $nguoi_dung_id, $trang_thai);
                unset($_SESSION['errors']);
                header("Location: ?act=don-hangs");
            } else {
                $_SESSION['errors'] = $errors;
                header("Location: ?act=sua-don-hang");
                exit();
            }
        }
    }

    public function destroy()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['don_hang_id'];
            // var_dump($id);

            $this->modelDonHang->deleteDonHang($id);

            header("Location: ?act=don-hangs");
            exit();
        }
    }
}
