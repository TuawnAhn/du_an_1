<?php
class TaiKhoan
{
    public $conn;

    //Ket noi csdl
    public function __construct()
    {
        $this->conn = connectDB();
    }

    //Danh sach tin tuc
    public function getAllTaiKhoan($chuc_vu_id)
    {
        try {
            $sql = 'SELECT * FROM tai_khoans Where chuc_vu_id= :chuc_vu_id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':chuc_vu_id' => $chuc_vu_id]);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Loi: ' . $e->getMessage();
        }
    }
    public function insertTaiKhoan($ho_ten, $email, $password, $chuc_vu_id)
    {

        try {
            $sql = "INSERT INTO tai_khoans (ho_ten,email,mat_khau,chuc_vu_id) VALUES (:ho_ten,:email,:mat_khau,:chuc_vu_id)";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':ho_ten', $ho_ten);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':chuc_vu_id', $chuc_vu_id);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Lỗi' . $e->getMessage();
        }
    }
    public function checkLogin($email, $mat_khau)
    {
        try {
            $sql = "SELECT * FROM tai_khoans WHERE email=:email";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch();
            if ($user && $user['mat_khau'] == $mat_khau) {
                if ($user['chuc_vu_id'] == 1) {
                    if ($user['trang_thai'] == 1) {
                        return $user;
                    } else {
                        return "Tài khoản bị cấm";
                    }
                } else {
                    return " Tài khoản không có quyền đăng nhập";
                }
            } else {
                echo "<script>alert('Bạn nhập sai thông tin mật khẩu tài khoản'); window.location.href='?act=login-admin;'</script>";
                exit();
            }
        } catch (Exception $e) {
            //throw $th;
            echo 'Lỗi' . $e->getMessage();
            return $e->getMessage();
        }
    }
}
