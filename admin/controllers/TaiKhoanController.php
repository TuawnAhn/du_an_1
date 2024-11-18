<?php
class TaiKhoanController
{
    public $modelTaiKhoan;

    public function __construct()
    {
        $this->modelTaiKhoan = new TaiKhoan();
    }
    public function danhSachQuanTri()
    {
        $lisQuanTri = $this->modelTaiKhoan->getAllTaiKhoan(1);
        // var_dump($lisQuanTri);die;
        require_once './views/taikhoan/quantri/listQuanTri.php';
    }
    public function formAddQuanTri()
    {
        require_once './views/taikhoan/quantri/addQuanTri.php';

        // deleteSessionError();
    }
    public function postAddQuanTri()
    {


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ho_ten = $_POST['ho_ten'];
            $email = $_POST['email'];
            // var_dump($email);

            $errors = [];

            if (empty($ho_ten)) {
                $errors['ho_ten'] = 'Tên  không được để trống';
            }

            if (empty($email)) {
                $errors['email'] = 'Emaili không được để trống';
            }

            $_SESSION['error'] = $errors;



            if (empty($errors)) {
                $password = password_hash('123456', PASSWORD_BCRYPT);
                // var_dump($password);die;
                $chuc_vu_id = 1;
                $this->modelTaiKhoan->insertTaiKhoan($ho_ten, $email, $password, $chuc_vu_id);

                // unset($_SESSION['errors']);
                header("Location: ?act=list-tai-khoan-quan-tri");
            } else {
                $_SESSION['flash'] = true;
                header("Location: ?act=form-them-quan-tri");
                exit();
            }

        }
    }
    public function formLogin()
    {
        require_once './views/auth/formLogin.php';
        // deleteSessionError();
    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->modelTaiKhoan->checkLogin($email, $password);
            if (gettype($user) != 'string') {
                if ($user['email'] == $email) {
                    $_SESSION['user_admin'] = $user;
                    $_SESSION['flash'] = false;
                    if ($user['chuc_vu_id'] == 1) {
                        header("Location: ?act=dashboard");
                    } else {
                        header("Location: ?act=danh-mucs");
                    }
                    exit();
                }

            } else {
                $_SESSION['flash'] = $user;
                header("Location: ?act=login-admin");
                exit();
            }

        }
    }
    public function logout()
    {
        if (isset($_SESSION['user_admin'])) {
            unset($_SESSION['user_admin']);
            header("Location: ?act=login-admin");
            exit();

        }
    }
}