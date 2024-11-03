<?php
class DanhMuc
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAll()
    {
        try {
            $sql = "SELECT * FROM tbl_danhmuc";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Lỗi' . $e->getMessage();
        }
    }

    public function postDanhMuc($ten_danh_muc, $trang_thai)
    {
        try {
            $sql = "INSERT INTO tbl_danhmuc (ten_danh_muc, trang_thai) VALUES (:ten_danh_muc, :trang_thai)";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':ten_danh_muc', $ten_danh_muc);
            $stmt->bindParam(':trang_thai', $trang_thai);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Lỗi' . $e->getMessage();
        }
    }

    public function deleteDanhMuc($id)
    {
        try {
            $sql = "DELETE FROM tbl_danhmuc WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Lỗi' . $e->getMessage();
        }
    }

    public function getDetailData($id)
    {
        try {
            $sql = "SELECT * FROM tbl_danhmuc WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (PDOException $e) {
            echo 'Lỗi' . $e->getMessage();
        }
    }
    public function updateData($id, $ten_danh_muc, $trang_thai)
    {
        try {
            $sql = "UPDATE tbl_danhmuc SET ten_danh_muc = :ten_danh_muc, trang_thai = :trang_thai WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':ten_danh_muc', $ten_danh_muc);
            $stmt->bindParam(':trang_thai', $trang_thai);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Lỗi' . $e->getMessage();
        }
    }


    public function __destroy()
    {
        $this->conn = null;
    }
}
