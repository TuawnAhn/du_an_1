<?php

class SanPham{
    public $conn;

    //Ket noi csdl
    public function __construct(){
        $this->conn = connectDB();
    }

    //Danh sach tin tuc
    public function getAll(){
        try {
            $sql = 'SELECT * FROM san_phams';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Loi: '. $e->getMessage();
        }
    }

    //Them du lieu moi vao csdl
    public function postData($ten,$img,$gia_ban,$gia_km,$mo_ta,$so_luong,$date){
        try {
            $sql = 'INSERT INTO san_phams (ten,img,gia_ban,gia_km,mo_ta,so_luong,date)
                 VALUES(:ten,:img,:gia_ban,:gia_km,:mo_ta,:so_luong,:date)';
            $stmt = $this->conn->prepare($sql);

            //Gan gia tri vao cac tham so
            $stmt->bindParam(':ten',$ten);
            $stmt->bindParam(':img',$img);
            $stmt->bindParam(':gia_ban',$gia_ban);
            $stmt->bindParam(':gia_km',$gia_km);
            $stmt->bindParam(':mo_ta',$mo_ta);
            $stmt->bindParam(':so_luong',$so_luong);
            $stmt->bindParam(':date',$date);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Loi: '. $e->getMessage();
        }
    }

    //Lay thong tin chi tiet
    public function getDetailData($id){
        try {
            $sql = 'SELECT * FROM san_phams WHERE id=:id';

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id',$id);

            $stmt->execute();
        

            return $stmt->fetch();
        } catch (PDOException $e) {
            echo 'Loi: '. $e->getMessage();
        }
    }

    //Cap nhat du lieu
    public function updateData($id,$ten,$img,$gia_ban,$gia_km,$mo_ta,$so_luong,$date){
        try {
            $sql = 'UPDATE san_phams SET ten= :ten, img=:img, gia_ban=:gia_ban, gia_km=:gia_km, mo_ta=:mo_ta, so_luong=:so_luong, date=:date WHERE id=:id ';
            $stmt = $this->conn->prepare($sql);

            //Gan gia tri vao cac tham so
            $stmt->bindParam(':id',$id);
            $stmt->bindParam(':ten',$ten);
            $stmt->bindParam(':img',$img);
            $stmt->bindParam(':gia_ban',$gia_ban);
            $stmt->bindParam(':gia_km',$gia_km);
            $stmt->bindParam(':mo_ta',$mo_ta);
            $stmt->bindParam(':so_luong',$so_luong);
            $stmt->bindParam(':date',$date);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Loi: '. $e->getMessage();
        }
    }

    //Xoa du lieu trong csdl
    public function deleteData($id){
        try {
            $sql = 'DELETE FROM san_phams WHERE id=:id';

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id',$id);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Loi: '. $e->getMessage();
        }
    }

    //Huy ket noi
    public function __destruct(){
        $this->conn = null;
    }
}

?>