<?php

class DonHang
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getAllChiTietDonHang()
    {
        try {
            // Câu truy vấn INNER JOIN với tên bảng đầy đủ
            $sql = "
                SELECT 
                    chi_tiet_don_hangs.id AS chi_tiet_id,
                    don_hangs.ma_don_hang AS ma_don_hang,
                    san_phams.ten AS ten_san_pham,
                    chi_tiet_don_hangs.so_luong,
                    chi_tiet_don_hangs.don_gia,
                    chi_tiet_don_hangs.thanh_tien
                FROM 
                    chi_tiet_don_hangs
                INNER JOIN 
                    don_hangs ON chi_tiet_don_hangs.don_hang_id = don_hangs.id
                INNER JOIN 
                    san_phams ON chi_tiet_don_hangs.san_pham_id = san_phams.id
                ORDER BY 
                    chi_tiet_don_hangs.id ASC
            ";

            // Chuẩn bị và thực thi truy vấn
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            // Trả về dữ liệu
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo 'Lỗi: ' . $e->getMessage();
        }
    }
}
