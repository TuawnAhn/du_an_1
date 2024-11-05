<?php
class BannerController
{ 
    // ket noiden file model
    public $modelBanner;

    public function __construct()
    {
        $this->modelBanner = new Banner();
    }
    public function index() {
        //Lay ra du lieu banner
        $banners = $this->modelBanner->getAll();
        require_once "./views/banner/list_banner.php";
        
    } 
    public function create()
    {
        
        require_once "./views/banner/create_banner.php";
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $hinh_anh = $_POST['hinh_anh'];
            $lien_ket = $_POST['lien_ket'];
            $trang_thai = $_POST['trang_thai'];
            $errors = [];

            if (empty($title)) {
                $errors['title'] = 'Tiêu đề không được để trống';
            }

            if (empty($hinh_anh)) {
                $errors['hinh_anh'] = 'Liên kết không được để trống';
            }

            if (empty($lien_ket)) {
                $errors['lien_ket'] = 'Liên kết không được để trống';
            }
            
            if (empty($trang_thai)) {
                $errors['trang_thai'] = 'Trạng thái không được để trống';
            }
            //them du lieu
            if (empty($errors)) {
                $this->modelBanner->postBanner($title, $hinh_anh, $lien_ket, $trang_thai);
                unset($_SESSION['errors']);
                header("Location: ?act=banners");
            } else {
                $_SESSION['errors'] = $errors;
                header("Location: ?act=form-them-banner");
                exit();
            }
        }
    }
    public function edit()
    {
        $id = $_GET['banner_id'];
        $banner = $this->modelBanner->getDetailData($id);
        // var_dump($danhmuc);

        require_once "./views/banner/edit_banner.php";
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $hinh_anh = $_POST['hinh_anh'];
            $lien_ket = $_POST['lien_ket'];
            $trang_thai = $_POST['trang_thai'];
            // var_dump($trang_thai);

            $errors = [];

            if (empty($title)) {
                $errors['title'] = 'Tên danh mục không được để trống';
            }

            if (empty($hinh_anh)) {
                $errors['hinh_anh'] = 'Liên kết không được để trống';
            }

            if (empty($lien_ket)) {
                $errors['lien_ket'] = 'Liên kết không được để trống';
            }

            if (empty($trang_thai)) {
                $errors['trang_thai'] = 'Trạng thái không được để trống';
            }

            if (empty($errors)) {
                $this->modelBanner->updateBanner($id, $title, $hinh_anh, $lien_ket,  $trang_thai);
                unset($_SESSION['errors']);
                header("Location: ?act=banners");
            } else {
                $_SESSION['errors'] = $errors;
                header("Location: ?act=form-sua-banner");
                exit();
            }
        }
    }

    public function destroy()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['banner_id'];
            // var_dump($id);

            $this->modelBanner->deleteBanner($id);

            header("Location: ?act=banners");
            exit();
        }
    } 
}