<?php

class ChiTietSanPham
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllChiTietSanPham($san_pham_id)
    {
        try {
            $sql = "
            SELECT 
                chi_tiet_san_phams.*, 
                san_phams.ten, 
                san_phams.img, 
                san_phams.gia_ban, 
                san_phams.gia_km, 
                san_phams.mo_ta, 
                san_phams.so_luong, 
                san_phams.date,
                san_phams.trang_thai,
                san_phams.gia_nhap,
                san_phams.danh_muc_id,
                danh_mucs.ten_danh_muc,
                hinh_anh_san_phams.album_hinh_anh -- Lấy album_hinh_anh từ bảng hinh_anh_san_phams
            FROM chi_tiet_san_phams
            INNER JOIN san_phams 
                ON chi_tiet_san_phams.san_pham_id = san_phams.id
            INNER JOIN danh_mucs 
                ON san_phams.danh_muc_id = danh_mucs.id
            LEFT JOIN hinh_anh_san_phams  -- LEFT JOIN với bảng hinh_anh_san_phams
                ON san_phams.id = hinh_anh_san_phams.san_pham_id
            WHERE chi_tiet_san_phams.san_pham_id = :san_pham_id
        ";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':san_pham_id', $san_pham_id);
            $stmt->execute();

            return $stmt->fetch();
        } catch (Exception $e) {
            echo 'Lỗi: ' . $e->getMessage();
        }
    }
}
