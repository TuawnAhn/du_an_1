<?php

class TinTuc{
    public $conn;

    //Ket noi csdl
    public function __construct(){
        $this->conn = connectDB();
    }

    //Danh sach tin tuc
    public function getAll(){
        try {
            $sql = 'SELECT * FROM tin_tucs';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Loi: '. $e->getMessage();
        }
    }

    //Them du lieu moi vao csdl
    public function postData($title,$content,$img,$date){
        try {
            $sql = 'INSERT INTO tin_tucs (title,content,img,date)
                 VALUES(:title,:content,:img,:date)';
            $stmt = $this->conn->prepare($sql);

            //Gan gia tri vao cac tham so
            $stmt->bindParam(':title',$title);
            $stmt->bindParam(':content',$content);
            $stmt->bindParam(':img',$img);
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
            $sql = 'SELECT * FROM tin_tucs WHERE id=:id';

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id',$id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (PDOException $e) {
            echo 'Loi: '. $e->getMessage();
        }
    }

    //Cap nhat du lieu
    public function updateData($id,$title,$content,$img,$date){
        try {
            $sql = 'UPDATE tin_tucs SET title= :title, content=:content, img=:img, date=:date WHERE id=:id ';
            $stmt = $this->conn->prepare($sql);

            //Gan gia tri vao cac tham so
            $stmt->bindParam(':id',$id);
            $stmt->bindParam(':title',$title);
            $stmt->bindParam(':content',$content);
            $stmt->bindParam(':img',$img);
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
            $sql = 'DELETE FROM tin_tucs WHERE id=:id';

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