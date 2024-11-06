<?php

class LienHe
{
    public $conn;

    //Ket noi csdl
    public function __construct()
    {
        $this->conn = connectDB();
    }

    //Danh sach liên hệ
    public function getAll()
    {
        try {
            $sql = 'SELECT * FROM tbl_lienhe';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Loi: ' . $e->getMessage();
        }
    }

    //Them du lieu moi vao csdl
    public function postData($name, $so_dien_thoai, $noi_dung, $ngay_gio)
    {
        try {
            $sql = 'INSERT INTO tbl_lienhe (name,so_dien_thoai,noi_dung,ngay_gio)
                 VALUES(:name,:so_dien_thoai,:noi_dung,:ngay_gio)';
            $stmt = $this->conn->prepare($sql);

            //Gan gia tri vao cac tham so
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':so_dien_thoai', $so_dien_thoai);
            $stmt->bindParam(':noi_dung', $noi_dung);
            $stmt->bindParam(':ngay_gio', $ngay_gio);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Loi: ' . $e->getMessage();
        }
    }

    //Lay thong tin chi tiet
    public function getDetailData($id)
    {
        try {

            $sql = 'SELECT * FROM tbl_lienhe WHERE id=:id';

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (PDOException $e) {
            echo 'Loi: ' . $e->getMessage();
        }
    }

    //Cap nhat du lieu
    public function updateData($id, $name, $so_dien_thoai, $noi_dung, $ngay_gio)
    {
        try {
            $sql = 'UPDATE tbl_lienhe SET name= :name, so_dien_thoai=:so_dien_thoai, noi_dung=:noi_dung , ngay_gio=:ngay_gio WHERE id=:id ';
            $stmt = $this->conn->prepare($sql);

            //Gan gia tri vao cac tham so
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':so_dien_thoai', $so_dien_thoai);
            $stmt->bindParam(':noi_dung', $noi_dung);
            $stmt->bindParam(':ngay_gio', $ngay_gio);


            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Loi: ' . $e->getMessage();
        }
    }

    //Xoa du lieu trong csdl
    public function deleteData($id)
    {
        try {
            $sql = 'DELETE FROM tbl_lienhe WHERE id=:id';

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Loi: ' . $e->getMessage();
        }
    }

    //Huy ket noi
    public function __destruct()
    {
        $this->conn = null;
    }
}
