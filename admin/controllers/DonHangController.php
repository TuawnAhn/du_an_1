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

        require_once "./views/donhang/edit_don_hang.php";
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $trang_thai_don_hang = $_POST['trang_thai_don_hang'];
            $trang_thai_thanh_toan = $_POST['trang_thai_thanh_toan'];
            $ngay_tao = $_POST['ngay_tao'];
            $trang_thai = $_POST['trang_thai'];
            // var_dump($trang_thai);

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
                $this->modelDonHang->updateData($id, $trang_thai_don_hang, $trang_thai_thanh_toan, $ngay_tao, $trang_thai);
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
