<?php
class BannerController
{
    // ket noiden file model
    public $modelBanner;

    public function __construct()
    {
        $this->modelBanner = new Banner();
    }
    public function index()
    {
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
            $lien_ket = $_POST['lien_ket'];
            $trang_thai = $_POST['trang_thai'];
            $errors = [];

            // Xử lý file hình ảnh
            if (isset($_FILES['hinh_anh']) && $_FILES['hinh_anh']['error'] == 0) {
                $targetDir = "uploads/";
                $targetFile = $targetDir . basename($_FILES['hinh_anh']['name']);
                if (move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $targetFile)) {
                    $hinh_anh = $targetFile;
                } else {
                    $errors['hinh_anh'] = 'Lỗi tải lên ảnh';
                }
            } else {
                $errors['hinh_anh'] = 'Hình ảnh không được để trống';
            }

            // Kiểm tra các trường đầu vào
            if (empty($title)) $errors['title'] = 'Tiêu đề không được để trống';
            if (empty($lien_ket)) $errors['lien_ket'] = 'Liên kết không được để trống';
            if (empty($trang_thai)) $errors['trang_thai'] = 'Trạng thái không được để trống';

            // Nếu không có lỗi, lưu banner vào CSDL
            if (empty($errors)) {
                // Gọi phương thức postBanner để lưu dữ liệu vào CSDL
                $this->modelBanner->postBanner($title, $hinh_anh, $lien_ket, $trang_thai);

                // Lưu thông báo thành công vào session
                $_SESSION['success'] = 'Thêm banner thành công';

                // Redirect về trang danh sách banner
                header("Location: ?act=banners");
                exit();
            } else {
                // Nếu có lỗi, lưu thông báo lỗi vào session
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
            $lien_ket = $_POST['lien_ket'];
            $trang_thai = $_POST['trang_thai'];
            $errors = [];

            if (isset($_FILES['hinh_anh']) && $_FILES['hinh_anh']['error'] == 0) {
                $targetDir = "uploads/";
                $targetFile = $targetDir . basename($_FILES['hinh_anh']['name']);
                if (move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $targetFile)) {
                    $hinh_anh = $targetFile;
                } else {
                    $errors['hinh_anh'] = 'Lỗi tải lên ảnh';
                }
            } else {
                $hinh_anh = $_POST['current_image']; // Dùng hình ảnh hiện tại nếu không cập nhật
            }

            if (empty($title)) $errors['title'] = 'Tiêu đề không được để trống';
            if (empty($lien_ket)) $errors['lien_ket'] = 'Liên kết không được để trống';
            if (empty($trang_thai)) $errors['trang_thai'] = 'Trạng thái không được để trống';

            if (empty($errors)) {
                $this->modelBanner->updateBanner($id, $title, $hinh_anh, $lien_ket, $trang_thai);
                unset($_SESSION['errors']);
                $_SESSION['success'] = 'Cập nhật banner thành công';
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
