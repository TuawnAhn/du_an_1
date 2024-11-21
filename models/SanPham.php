<?php

class SanPham
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllSanPham()
    {
        try {
            $sql = "SELECT san_phams.*,danh_mucs.ten_danh_muc FROM san_phams INNER JOIN danh_mucs ON san_phams.danh_muc_id = danh_mucs.id";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo 'Loi: ' . $e->getMessage();
        }
    }

    public function searchByName($ten)
    {
        try {
            // Câu lệnh SQL sử dụng tham số :ten để bảo mật
            $sql= 'SELECT san_phams.*,danh_mucs.ten_danh_muc 
                    FROM san_phams 
                    INNER JOIN danh_mucs ON san_phams.danh_muc_id = danh_mucs.id
                    WHERE san_phams.ten LIKE :ten';
    
            $stmt = $this->conn->prepare($sql);
    
            // Thêm dấu % vào biến $ten để tìm kiếm gần đúng
            $ten = '%' . $ten . '%';
    
            // Gắn tham số vào câu lệnh
            $stmt->bindParam(':ten', $ten, PDO::PARAM_STR);
    
            $stmt->execute();
    
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Lỗi: ' . $e->getMessage();
        }
    }
    public function getAll()
    {
        try {
            $sql = 'SELECT san_phams.*,danh_mucs.ten_danh_muc FROM san_phams INNER JOIN danh_mucs ON san_phams.danh_muc_id = danh_mucs.id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Lỗi' . $e->getMessage();
        }
    }
}
