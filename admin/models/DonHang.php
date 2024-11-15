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
    public function searchOrders($search)
    {
        // Kết nối cơ sở dữ liệu
        $conn = connectDB();

        // Truy vấn tìm kiếm theo mã đơn hàng hoặc số điện thoại
        $query = "SELECT * FROM don_hangs WHERE ma_don_hang LIKE :search OR sdt_nguoi_nhan LIKE :search";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':search', '%' . $search . '%');
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getAllTrangThaiDonHang()
    {
        try {
            $sql = "SELECT * FROM trang_thai_don_hangs";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
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

    public function getDetailDonHang($id)
    {
        try {
            $sql = 'SELECT don_hangs.*, trang_thai_don_hangs.trang_thai_don_hang
            FROM don_hangs
            INNER JOIN trang_thai_don_hangs ON don_hangs.trang_thai = trang_thai_don_hangs.trang_thai
            WHERE don_hangs.id = :id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([':id' => $id]);

            return $stmt->fetch();
        } catch (PDOException $e) {
            echo 'Loi' . $e->getMessage();
        }
    }

    public function getListSpDonHang($id)
    {
        try {
            $sql = 'SELECT chi_tiet_don_hangs.*, san_phams.ten
             FROM chi_tiet_don_hangs
             INNER JOIN san_phams ON chi_tiet_don_hangs.san_pham_id = san_pham_id
            WHERE chi_tiet_don_hangs.don_hang_id = :id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([':id' => $id]);

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Loi' . $e->getMessage();
        }
    }

    public function updateData($id, $ho_ten_nguoi_nhan, $sdt_nguoi_nhan, $email_nguoi_nhan, $dia_chi_nguoi_nhan,  $trang_thai_don_hang_id, $ghi_chu)
    {
        try {
            $sql = "UPDATE don_hangs SET  ho_ten_nguoi_nhan = :ho_ten_nguoi_nhan, sdt_nguoi_nhan = :sdt_nguoi_nhan, email_nguoi_nhan = :email_nguoi_nhan, dia_chi_nguoi_nhan = :dia_chi_nguoi_nhan,  trang_thai_don_hang_id = :trang_thai_don_hang_id, ghi_chu = :ghi_chu WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':ho_ten_nguoi_nhan', $ho_ten_nguoi_nhan);
            $stmt->bindParam(':sdt_nguoi_nhan', $sdt_nguoi_nhan);
            $stmt->bindParam(':email_nguoi_nhan', $email_nguoi_nhan);
            $stmt->bindParam(':dia_chi_nguoi_nhan', $dia_chi_nguoi_nhan);
            $stmt->bindParam(':trang_thai_don_hang_id', $trang_thai_don_hang);
            $stmt->bindParam(':ghi_chu', $ghi_chu);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Lỗi' . $e->getMessage();
        }
    }


   
}
