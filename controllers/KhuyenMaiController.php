<?php

class KhuyenMaiController{
    //kết nối file model
    public $modelKhuyenMai;
    public function __construct()
    {
        $this -> modelKhuyenMai = new KhuyenMai();
    }
    //Hiển thị danh sách khuyến mãi
    public function view(){
        //lấy ra danh sách khuyến mãi
        $danhSachKhuyenMai = $this->modelKhuyenMai->getAllKhuyenMai();

        // var_dump($danhSachKhuyenMai);
        // die();

        //đưa dữ liệu ra view
        require_once './views/Khuyenmai.php';

    }


}
