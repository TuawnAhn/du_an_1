<?php
class TinTucController{

    //Ket noi den file model
    public $modelTinTuc;

    public function __construct(){ 
        $this->modelTinTuc = new TinTuc();
    }
    public function index(){
        $TinTucs = $this->modelTinTuc->getAll();
        require_once './views/TinTuc/list_tin_tuc.php';
    }
    public function create(){
        require_once './views/TinTuc/them_tin_tuc.php';
    }
    public function store(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $title = $_POST['title'];
            $content = $_POST['content'];
            $img = $_POST['img'];
            $date = $_POST['date'];
            

            $errors = [];
            if(empty($title)){
                $errors['title'] = 'Vui lòng nhập tiêu đề'; 
            }
            if(empty($content)){
                $errors['content'] = 'Vui lòng nhập mô tả'; 
            }
            if(empty($img)){
                $errors['img'] = 'Vui lòng nhập link ảnh'; 
            }
            if(empty($date)){
                $errors['date'] = 'Vui lòng nhập link ảnh'; 
            }

            //Thêm dữ liệu
            if (empty($errors)){
                //Neu ko co loi thi them du lieu
                // Them vao csdl
                $this->modelTinTuc->postData($title,$content,$img,$date);
                unset($_SESSION['errors']);
                header('Location: ?act=tin-tucs');
            }else{
                $_SESSION['errors'] =  $errors;
                header('Location: ?act=form-them-tin-tuc');
                exit();
            }

        }
    }

    //Hien thi form sua
    public function edit(){
        $id = $_GET['tin_tuc_id'];
        //Lay thong tin chi tiet cua danh muc
        $Tintuc = $this->modelTinTuc->getDetailData($id);
        
        //Do du lieu ra form
        require_once './views/TinTuc/sua_tin_tuc.php';


    }
    public function update(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $img = $_POST['img'];
            $date = $_POST['date'];
            

            $errors = [];
            if(empty($title)){
                $errors['title'] = 'Vui lòng nhập tiêu đề'; 
            }
            if(empty($content)){
                $errors['content'] = 'Vui lòng nhập mô tả'; 
            }
            if(empty($img)){
                $errors['img'] = 'Vui lòng nhập link ảnh'; 
            }
            if(empty($date)){
                $errors['date'] = 'Vui lòng nhập link ảnh'; 
            }

            //Thêm dữ liệu
            if (empty($errors)){
                //Neu ko co loi thi them du lieu
                // Them vao csdl
                $this->modelTinTuc->updateData($id,$title,$content,$img,$date);
                unset($_SESSION['errors']);
                header('Location: ?act=tin-tucs');
            }else{
                $_SESSION['errors'] =  $errors;
                header('Location: ?act=form-sua-tin-tuc');
                exit();
            }

        }

    }
    public function destroy(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['tin_tuc_id'];

            //Xoa danh muc
             $this->modelTinTuc->deleteData($id);
            header('Location: ?act=tin-tucs');
            exit();


    }
    
}
}
?>