<?php
class ChiTietSanPhamController
{

    //Ket noi den file model
    public $modelchiTietSanPham;
    public $modelSanPham;
    public function __construct()
    {
        $this->modelchiTietSanPham = new ChiTietSanPham();
        $this->modelSanPham = new SanPham();
    }
    public function chitietsanpham($san_pham_id)
    {

        $chiTietSanPham = $this->modelchiTietSanPham->getAllChiTietSanPham($san_pham_id);
        $albumHinhAnh = $this->modelchiTietSanPham->getAlbumHinhAnh($san_pham_id);
        $listBinhLuan = $this->modelchiTietSanPham->getAllBinhLuan($san_pham_id);
        $listDanhMuc = $this->modelSanPham->getAllDanhMuc();
        $listSanPhamCungDanhMuc = $this->modelchiTietSanPham->getSanPhamCungDanhMuc($chiTietSanPham['danh_muc_id']);
        // var_dump($listSanPhamCungDanhMuc);

        require_once './views/chitietsanpham.php';
    }
}
