<?php
class SanPhamController
{

    //Ket noi den file model
    public $modelSanPham;

    public function __construct()
    {
        $this->modelSanPham = new SanPham();
    }
    public function index()
    {
        $SanPhams = $this->modelSanPham->getAll();
        require_once './views/sanpham/list_san_pham.php';
    }
    public function create()
    {
        require_once './views/sanpham/them_san_pham.php';
    }
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ten = $_POST['ten'];
            $gia_ban = $_POST['gia_ban'];
            $gia_km = $_POST['gia_km'];
            $trang_thai = $_POST['trang_thai'];
            $mo_ta = $_POST['mo_ta'];
            $so_luong = $_POST['so_luong'];
            $date = $_POST['date'];

            $errors = [];

            if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
                // Xử lý file ảnh
                $imgFile = $_FILES['img'];
                $imgName = time() . '_' . basename($imgFile['name']); // Đổi tên file tránh trùng lặp
                $imgPath = './uploads/' . $imgName;

                $fileType = strtolower(pathinfo($imgPath, PATHINFO_EXTENSION));
                if (!in_array($fileType, ['jpg', 'jpeg', 'png'])) {
                    $errors['img'] = 'Chỉ chấp nhận các file có định dạng JPG, JPEG, hoặc PNG';
                }

                if (empty($errors['img']) && move_uploaded_file($imgFile['tmp_name'], $imgPath)) {
                    $img = $imgPath; // Lưu đường dẫn ảnh vào cơ sở dữ liệu
                } else {
                    $errors['img'] = 'Có lỗi khi tải lên file ảnh';
                }
            } else {
                $errors['img'] = 'Vui lòng tải lên một file ảnh';
            }

            // Các kiểm tra khác
            if (empty($ten)) {
                $errors['ten'] = 'Vui lòng nhập tên sản phẩm';
            }
            if (empty($gia_ban)) {
                $errors['gia_ban'] = 'Vui lòng nhập giá bán';
            }
            if (empty($gia_km)) {
                $errors['gia_km'] = 'Vui lòng nhập giá khuyến mãi';
            }
            if (empty($trang_thai)) {
                $errors['trang_thai'] = 'Trạng thái không được để trống';
            }
            if (empty($mo_ta)) {
                $errors['mo_ta'] = 'Vui lòng nhập mô tả';
            }
            if (empty($so_luong)) {
                $errors['so_luong'] = 'Vui lòng nhập số lượng';
            }
            if (empty($date)) {
                $errors['date'] = 'Vui lòng nhập ngày';
            }

            // Thêm dữ liệu
            if (empty($errors)) {
                $this->modelSanPham->postData($ten, $img, $gia_ban, $gia_km, $mo_ta, $so_luong, $date);
                unset($_SESSION['errors']);
                header('Location: ?act=san-phams');
            } else {
                $_SESSION['errors'] =  $errors;
                header('Location: ?act=form-them-san-pham');
                exit();
            }
        }
    }


    //Hien thi form sua
    public function edit()
    {
        $id = $_GET['san_pham_id'];
        //Lay thong tin chi tiet cua danh muc
        $SanPham = $this->modelSanPham->getDetailData($id);

        //Do du lieu ra form
        require_once './views/sanpham/sua_san_pham.php';
    }
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $ten = $_POST['ten'];
            $gia_ban = $_POST['gia_ban'];
            $gia_km = $_POST['gia_km'];
            $trang_thai = $_POST['trang_thai'];
            $mo_ta = $_POST['mo_ta'];
            $so_luong = $_POST['so_luong'];
            $date = $_POST['date'];

            $errors = [];

            // Kiểm tra xem có upload file ảnh mới hay không
            if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
                // Xử lý file ảnh
                $imgFile = $_FILES['img'];
                $imgName = time() . '_' . basename($imgFile['name']); // Đổi tên file tránh trùng lặp
                $imgPath = './uploads/' . $imgName;

                // Kiểm tra loại file (chỉ chấp nhận jpg, png)
                $fileType = strtolower(pathinfo($imgPath, PATHINFO_EXTENSION));
                if (!in_array($fileType, ['jpg', 'jpeg', 'png'])) {
                    $errors['img'] = 'Chỉ chấp nhận các file có định dạng JPG, JPEG, hoặc PNG';
                }

                // Nếu không có lỗi, di chuyển file đến thư mục uploads
                if (empty($errors['img']) && move_uploaded_file($imgFile['tmp_name'], $imgPath)) {
                    $img = $imgPath; // Lưu đường dẫn ảnh mới
                } else {
                    $errors['img'] = 'Có lỗi khi tải lên file ảnh';
                }
            } else {
                // Nếu không có file ảnh mới, giữ lại ảnh cũ
                $SanPham = $this->modelSanPham->getDetailData($id);
                $img = $SanPham['img'];
            }

            // Các kiểm tra khác
            if (empty($ten)) {
                $errors['ten'] = 'Vui lòng nhập tên sản phẩm';
            }
            if (empty($gia_ban)) {
                $errors['gia_ban'] = 'Vui lòng nhập giá bán';
            }
            if (empty($gia_km)) {
                $errors['gia_km'] = 'Vui lòng nhập giá khuyến mãi';
            }
            if (empty($trang_thai)) {
                $errors['trang_thai'] = 'Trạng thái không được để trống';
            }
            if (empty($mo_ta)) {
                $errors['mo_ta'] = 'Vui lòng nhập mô tả';
            }
            if (empty($so_luong)) {
                $errors['so_luong'] = 'Vui lòng nhập số lượng';
            }
            if (empty($date)) {
                $errors['date'] = 'Vui lòng nhập ngày';
            }

            // Cập nhật dữ liệu
            if (empty($errors)) {
                $this->modelSanPham->updateData($id, $ten, $img, $gia_ban, $gia_km, $trang_thai, $mo_ta, $so_luong, $date);
                unset($_SESSION['errors']);
                header('Location: ?act=san-phams');
            } else {
                $_SESSION['errors'] =  $errors;
                header('Location: ?act=form-sua-san-pham');
                exit();
            }
        }
    }
    public function destroy()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['san_pham_id'];

            //Xoa danh muc
            $this->modelSanPham->deleteData($id);
            header('Location: ?act=san-phams');
            exit();
        }
    }
}
