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
            $sql = "SELECT don_hangs.*, trang_thai_don_hangs.trang_thai_don_hang, phuong_thuc_thanh_toans.phuong_thuc_thanh_toan
                    FROM don_hangs
                    JOIN trang_thai_don_hangs ON don_hangs.trang_thai_don_hang_id = trang_thai_don_hangs.id
                    JOIN phuong_thuc_thanh_toans  ON don_hangs.phuong_thuc_thanh_toan_id = phuong_thuc_thanh_toans.id";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Lỗi' . $e->getMessage();
        }
    }
    public function searchDonHang($searchTerm)
    {
        // Giả sử bạn đang tìm kiếm theo mã đơn hàng (hoặc theo các thuộc tính khác)
        $sql = "SELECT * FROM don_hangs WHERE ma_don_hang LIKE :searchTerm";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%');
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



    // public function postDonHang($ma_don_hang, $ho_ten_nguoi_nhan, $sdt_nguoi_nhan, $email_nguoi_nhan, $dia_chi_nguoi_nhan, $ngay_dat_hang, $trang_thai_don_hang, $trang_thai_thanh_toan, $phuong_thuc_thanh_toan, $nguoi_dung_id, $trang_thai)
    // {
    //     try {
    //         $sql = "INSERT INTO don_hangs (ma_don_hang, ho_ten_nguoi_nhan, sdt_nguoi_nhan, email_nguoi_nhan, dia_chi_nguoi_nhan, ngay_dat_hang, trang_thai_don_hang, trang_thai_thanh_toan, phuong_thuc_thanh_toan, nguoi_dung_id, trang_thai) VALUES (:ma_don_hang, :ho_ten_nguoi_nhan, :sdt_nguoi_nhan, :email_nguoi_nhan, :dia_chi_nguoi_nhan, :ngay_dat_hang, :trang_thai_don_hang, :trang_thai_thanh_toan, :phuong_thuc_thanh_toan, :nguoi_dung_id, :trang_thai)";

    //         $stmt = $this->conn->prepare($sql);

    //         $stmt->bindParam(':ma_don_hang', $ma_don_hang);
    //         $stmt->bindParam(':ho_ten_nguoi_nhan', $ho_ten_nguoi_nhan);
    //         $stmt->bindParam(':sdt_nguoi_nhan', $sdt_nguoi_nhan);
    //         $stmt->bindParam(':email_nguoi_nhan', $email_nguoi_nhan);
    //         $stmt->bindParam(':dia_chi_nguoi_nhan', $dia_chi_nguoi_nhan);
    //         $stmt->bindParam(':ngay_dat_hang', $ngay_dat_hang);
    //         $stmt->bindParam(':trang_thai_don_hang', $trang_thai_don_hang);
    //         $stmt->bindParam(':trang_thai_thanh_toan', $trang_thai_thanh_toan);
    //         $stmt->bindParam(':phuong_thuc_thanh_toan', $phuong_thuc_thanh_toan);
    //         $stmt->bindParam(':nguoi_dung_id', $nguoi_dung_id);
    //         $stmt->bindParam(':trang_thai', $trang_thai);

    //         $stmt->execute();

    //         return true;
    //     } catch (PDOException $e) {
    //         echo 'Lỗi' . $e->getMessage();
    //     }
    // }

    // public function deleteDonHang($id)
    // {
    //     try {
    //         $sql = "DELETE FROM don_hangs WHERE id = :id";

    //         $stmt = $this->conn->prepare($sql);

    //         $stmt->bindParam(':id', $id);

    //         $stmt->execute();

    //         return true;
    //     } catch (PDOException $e) {
    //         echo 'Lỗi' . $e->getMessage();
    //     }
    // }

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
            $sql = 'SELECT don_hangs.*, trang_thai_don_hangs.trang_thai_don_hang, tai_khoans.ho_ten, tai_khoans.so_dien_thoai, tai_khoans.email, phuong_thuc_thanh_toans.phuong_thuc_thanh_toan
            FROM don_hangs
            INNER JOIN trang_thai_don_hangs ON don_hangs.trang_thai_don_hang_id = trang_thai_don_hangs.id
            INNER JOIN tai_khoans ON don_hangs.nguoi_dung_id = tai_khoans.id
            INNER JOIN phuong_thuc_thanh_toans ON don_hangs.phuong_thuc_thanh_toan_id = phuong_thuc_thanh_toans.id
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
            INNER JOIN san_phams ON chi_tiet_don_hangs.san_pham_id = san_phams.id
            WHERE chi_tiet_don_hangs.don_hang_id = :id';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':id' => $id]);

            $result = $stmt->fetchAll(); // Sử dụng fetchAll() để lấy tất cả kết quả

            if (empty($result)) {
                echo "Không có sản phẩm trong đơn hàng!";
            }

            return $result;  // Trả về tất cả các sản phẩm trong đơn hàng
        } catch (PDOException $e) {
            echo 'Lỗi: ' . $e->getMessage();
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
