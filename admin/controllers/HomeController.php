<?php 

class HomeController
{
    public $modelTaiKhoan;

    public function __construct()
    {
        $this->modelTaiKhoan = new TaiKhoan();
    }
    public function formLogin()
    {
        require_once './views/auth/formLogin.php';
        // deleteSessionError();
    }
    public function postlogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->modelTaiKhoan->checkLogin($email, $password);
      
            if (gettype($user) != 'string') {
                if ($user['email'] == $email) {
                    $_SESSION['user_client'] = $user;
                    $_SESSION['flash'] = false;
                    header("Location: ?act=dashboard");
                    exit();
                }

            } else {
                $_SESSION['flash'] = $user;
                header("Location: ?act=login-admin");
                exit();
            }

        }
    }
}