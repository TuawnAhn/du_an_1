<?php
class LienHeController{

    //Ket noi den file model
    public $modelLienHe;

    public function __construct(){ 
        $this->modelLienHe = new LienHe();
    }
    public function index(){
        //lấy ra dữ liệu liên hệ
        $lienhes = $this->modelLienHe->getAll();
        require_once './views/LienHe/list_lien_he.php';
    }
    public function create(){
        require_once './views/LienHe/them_lien_he.php';
    }
    public function store(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $ten_lien_he = $_POST['ten_lien_he'];
            $trang_thai = $_POST['trang_thai'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $noi_dung = $_POST['noi_dung'];
           
            

            $errors = [];
            if(empty($ten_lien_he)){
                $errors['ten_lien_he'] = 'Vui lòng nhập tiêu đề'; 
            }
            if(empty($trang_thai)){
                $errors['trang_thai'] = 'Vui lòng nhập mô tả'; 
            }
            if(empty($noi_dung)){
                $errors['noi_dung'] = 'Vui lòng nhập nội dung'; 
            }
            if(empty($so_dien_thoai)){
                $errors['so_dien_thoai'] = 'Vui lòng nhập số điện thoại'; 
            }
            

            //Thêm dữ liệu
            if (empty($errors)){
                //Neu ko co loi thi them du lieu
                // Them vao csdl
                $this->modelLienHe->postData($ten_lien_he,  $so_dien_thoai, $noi_dung, $trang_thai);
                unset($_SESSION['errors']);
                header('Location: ?act=lien-he');
            }else{
                $_SESSION['errors'] =  $errors;
                header('Location: ?act=form-them-lien-he');
                exit();
            }

        }
    }

    //Hien thi form sua
    public function edit(){
        $id = $_GET['lien_he_id'];
        //Lay thong tin chi tiet cua danh muc
        $lienhe = $this->modelLienHe->getDetailData($id);
        //Do du lieu ra form
        require_once './views/LienHe/sua_lien_he.php';


    }
    public function update(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['id'];
            $ten_lien_he = $_POST['ten_lien_he'];
            $trang_thai = $_POST['trang_thai'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $noi_dung = $_POST['noi_dung'];
            

            $errors = [];
            if(empty($ten_lien_he)){
                $errors['ten_lien_he'] = 'Vui lòng nhập tiêu đề'; 
            }
            if(empty($so_dien_thoai)){
                $errors['so_dien_thoai'] = 'Vui lòng nhập mô tả'; 
            }
            if(empty($noi_dung)){
                $errors['noi_dung'] = 'Vui lòng nhập nội dung'; 
            }
            if(empty($trang_thai)){
                $errors['trang_thai'] = 'Vui lòng nhập trạng thái'; 
            }
            

            //Thêm dữ liệu
            if (empty($errors)){
                //Neu ko co loi thi them du lieu
                // Them vao csdl
                $this->modelLienHe->updateData($id,$ten_lien_he,$so_dien_thoai,$noi_dung, $trang_thai);
                unset($_SESSION['errors']);
                header('Location: ?act=lien-he');
            }else{
                $_SESSION['errors'] =  $errors;
                header('Location: ?act=form-sua-lien-he');
                exit();
            }

        }

    }
    public function destroy(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['lien_he_id'];

            //Xoa danh muc
             $this->modelLienHe->deleteData($id);
            header('Location: ?act=lien-he');
            exit();


    }
    
}
}
?>