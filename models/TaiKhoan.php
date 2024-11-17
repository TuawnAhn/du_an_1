<?php
class TaiKhoan 
{
    public $conn;

    //Ket noi csdl
    public function __construct(){
        $this->conn = connectDB();
    }
    public function checkLogin($email,$mat_khau){
        try {
           $sql="SELECT * FROM tai_khoans WHERE email=:email";
           $stmt=$this->conn->prepare($sql);
           $stmt->execute(['email'=>$email]);
           $user =$stmt->fetch();
           if($user && $user['mat_khau'] == $mat_khau){
               if ($user['chuc_vu_id']==2) {
                  if ($user['trang_thai']==1) {
                   return $user;
                  }else{
                   return "Tài khoản bị cấm";
                  }
               }else{
                   return" Tài khoản không có quyền đăng nhập";
               }
           }else{
               return "Bạn nhập sai thông tin mật khẩu tài khoản";
           }
        } catch (Exception $e) {
           //throw $th;
           echo 'Lỗi' . $e->getMessage();
           return $e->getMessage();
        }
   }
}