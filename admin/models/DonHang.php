<?php
class DonHang
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getAll()
    {
        try {
            $sql = "SELECT dh.id, dh.ma_don_hang, dh.ho_ten_nguoi_nhan, dh.sdt_nguoi_nhan, dh.email_nguoi_nhan, dh.dia_chi_nguoi_nhan, dh.ngay_dat_hang, dh.phuong_thuc_thanh_toan, dh.nguoi_dung_id, dh.trang_thai, 
                        tdh.trang_thai_don_hang, tdh2.trang_thai_thanh_toan
                    FROM don_hangs dh
                    JOIN trang_thai_don_hangs tdh ON dh.trang_thai_don_hang_id = tdh.id
                    JOIN trang_thai_don_hangs tdh2 ON dh.trang_thai_thanh_toan_id = tdh2.id";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Lỗi' . $e->getMessage();
        }
    }



    public function postDonHang($ma_don_hang, $ho_ten_nguoi_nhan, $sdt_nguoi_nhan, $email_nguoi_nhan, $dia_chi_nguoi_nhan, $ngay_dat_hang, $trang_thai_don_hang, $trang_thai_thanh_toan, $phuong_thuc_thanh_toan, $nguoi_dung_id, $trang_thai)
    {
        try {
            $sql = "INSERT INTO don_hangs (ma_don_hang, ho_ten_nguoi_nhan, sdt_nguoi_nhan, email_nguoi_nhan, dia_chi_nguoi_nhan, ngay_dat_hang, trang_thai_don_hang, trang_thai_thanh_toan, phuong_thuc_thanh_toan, nguoi_dung_id, trang_thai) VALUES (:ma_don_hang, :ho_ten_nguoi_nhan, :sdt_nguoi_nhan, :email_nguoi_nhan, :dia_chi_nguoi_nhan, :ngay_dat_hang, :trang_thai_don_hang, :trang_thai_thanh_toan, :phuong_thuc_thanh_toan, :nguoi_dung_id, :trang_thai)";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':ma_don_hang', $ma_don_hang);
            $stmt->bindParam(':ho_ten_nguoi_nhan', $ho_ten_nguoi_nhan);
            $stmt->bindParam(':sdt_nguoi_nhan', $sdt_nguoi_nhan);
            $stmt->bindParam(':email_nguoi_nhan', $email_nguoi_nhan);
            $stmt->bindParam(':dia_chi_nguoi_nhan', $dia_chi_nguoi_nhan);
            $stmt->bindParam(':ngay_dat_hang', $ngay_dat_hang);
            $stmt->bindParam(':trang_thai_don_hang', $trang_thai_don_hang);
            $stmt->bindParam(':trang_thai_thanh_toan', $trang_thai_thanh_toan);
            $stmt->bindParam(':phuong_thuc_thanh_toan', $phuong_thuc_thanh_toan);
            $stmt->bindParam(':nguoi_dung_id', $nguoi_dung_id);
            $stmt->bindParam(':trang_thai', $trang_thai);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Lỗi' . $e->getMessage();
        }
    }

    public function deleteDonHang($id)
    {
        try {
            $sql = "DELETE FROM don_hangs WHERE id = :id";

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
            $sql = "SELECT * FROM don_hangs WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (PDOException $e) {
            echo 'Lỗi' . $e->getMessage();
        }
    }

    public function getDetailDonHang($id) {
        try {
            $sql = 'SELECT don_hangs.*, trang_thai_don_hangs.trang_thai_don_hang
            FROM don_hangs
            INNER JOIN trang_thai_don_hangs ON don_hangs.trang_thai = trang_thai_don_hangs.trang_thai
            WHERE don_hangs.id = :id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([':id'=>$id]);

            return $stmt->fetch();
        } catch (PDOException $e) {
            echo 'Loi' . $e->getMessage();
        }
    }

    public function getListSpDonHang($id) {
        try {
            $sql = 'SELECT * FROM chi_tiet_don_hangs
            WHERE don_hang_id = :id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([':id'=>$id]);

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Loi' . $e->getMessage();
        }
    }

    public function updateData($id, $ma_don_hang, $ho_ten_nguoi_nhan, $sdt_nguoi_nhan, $email_nguoi_nhan, $dia_chi_nguoi_nhan, $ngay_dat_hang, $trang_thai_don_hang, $trang_thai_thanh_toan, $phuong_thuc_thanh_toan, $nguoi_dung_id, $trang_thai)
    {
        try {
            $sql = "UPDATE don_hangs SET ma_don_hang = :ma_don_hang, ho_ten_nguoi_nhan = :ho_ten_nguoi_nhan, sdt_nguoi_nhan = :sdt_nguoi_nhan, email_nguoi_nhan = :email_nguoi_nhan, dia_chi_nguoi_nhan = :dia_chi_nguoi_nhan, ngay_dat_hang = :ngay_dat_hang, trang_thai_don_hang = :trang_thai_don_hang, trang_thai_thanh_toan = :trang_thai_thanh_toan, phuong_thuc_thanh_toan = :phuong_thuc_thanh_toan, nguoi_dung_id = :nguoi_dung_id, trang_thai = :trang_thai WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':ma_don_hang', $ma_don_hang);
            $stmt->bindParam(':ho_ten_nguoi_nhan', $ho_ten_nguoi_nhan);
            $stmt->bindParam(':sdt_nguoi_nhan', $sdt_nguoi_nhan);
            $stmt->bindParam(':email_nguoi_nhan', $email_nguoi_nhan);
            $stmt->bindParam(':dia_chi_nguoi_nhan', $dia_chi_nguoi_nhan);
            $stmt->bindParam(':ngay_dat_hang', $ngay_dat_hang);
            $stmt->bindParam(':trang_thai_thanh_toan', $trang_thai_thanh_toan);
            $stmt->bindParam(':trang_thai_don_hang', $trang_thai_don_hang);
            $stmt->bindParam(':phuong_thuc_thanh_toan', $phuong_thuc_thanh_toan);
            $stmt->bindParam(':nguoi_dung_id', $nguoi_dung_id);
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
