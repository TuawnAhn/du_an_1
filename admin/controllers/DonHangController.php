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
            $trang_thai_don_hang = $_POST['trang_thai_don_hang'];
            $trang_thai_thanh_toan = $_POST['trang_thai_thanh_toan'];
            $ngay_tao = $_POST['ngay_tao'];
            $trang_thai = $_POST['trang_thai'];

            // var_dump();

            $errors = [];

            if (empty($trang_thai_don_hang)) {
                $errors['trang_thai_don_hang'] = 'Trạng thái đơn hàng không được để trống';
            }

            if (empty($trang_thai_thanh_toan)) {
                $errors['trang_thai_thanh_toan'] = 'Trạng thái thanh toán không được để trống';
            }

            if (empty($ngay_tao)) {
                $errors['ngay_tao'] = 'Ngày tạo không được để trống';
            }

            if (empty($trang_thai)) {
                $errors['trang_thai'] = 'Trạng thái không được để trống';
            }


            if (empty($errors)) {
                $this->modelDonHang->postDonHang($trang_thai_don_hang, $trang_thai_thanh_toan, $ngay_tao, $trang_thai);
                unset($_SESSION['errors']);
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

        require_once "./views/donhang/edit_don_hang.php";
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $ten_khuyen_mai = $_POST['ten_khuyen_mai'];
            $mo_ta = $_POST['mo_ta'];
            $giam_gia = $_POST['giam_gia'];
            $ngay_bat_dau = $_POST['ngay_bat_dau'];
            $ngay_ket_thuc = $_POST['ngay_ket_thuc'];
            $trang_thai = $_POST['trang_thai'];
            // var_dump($trang_thai);

            $errors = [];

            if (empty($ten_khuyen_mai)) {
                $errors['ten_khuyen$ten_khuyen_mai'] = 'Tên danh mục không được để trống';
            }

            if (empty($trang_thai)) {
                $errors['trang_thai'] = 'Trạng thái không được để trống';
            }

            if (empty($errors)) {
                $this->modelDonHang->updateData($id, $ten_khuyen_mai, $mo_ta, $giam_gia, $ngay_bat_dau, $ngay_ket_thuc, $trang_thai);
                unset($_SESSION['errors']);
                header("Location: ?act=khuyen-mais");
            } else {
                $_SESSION['errors'] = $errors;
                header("Location: ?act=sua-khuyen-mai");
                exit();
            }
        }
    }

    public function destroy()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['khuyen_mai_id'];
            // var_dump($id);

            $this->modelDonHang->deleteDonHang($id);

            header("Location: ?act=khuyen-mais");
            exit();
        }
    }
}
