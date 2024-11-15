<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:29:52 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Đơn hàng | Sliver Ring</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- CSS -->
    <?php
    require_once "views/layouts/libs_css.php";
    ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- HEADER -->
        <?php
        require_once "views/layouts/header.php";

        require_once "views/layouts/siderbar.php";
        ?>

        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- Tiêu đề trang -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Quản lý danh sách đơn hàng - Đơn hàng: <?= $donhang['ma_don_hang'] ?></h4>



                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item"><a href="?act=don-hangs">Danh sách đơn hàng</a></li>
                                        <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-warning text-white">
                                    <h5 class="card-title mb-0" style="color: #fff;">Đơn hàng: <?php if ($donhang['trang_thai_don_hang'] == 1) { ?>
                                            <span>Chờ xác nhận</span>
                                        <?php } else if ($donhang['trang_thai_don_hang'] == 2) { ?>
                                            <span>Đã xác nhận</span>
                                        <?php } else if ($donhang['trang_thai_don_hang'] == 3) { ?>
                                            <span>Đang giao</span>
                                        <?php } else if ($donhang['trang_thai_don_hang'] == 4) { ?>
                                            <span>Đã giao</span>
                                        <?php } else if ($donhang['trang_thai_don_hang'] == 5) { ?>
                                            <span>Đã hoàn thành</span>
                                        <?php } else if ($donhang['trang_thai_don_hang'] == 6) { ?>
                                            <span>Đã thất bại</span>
                                        <?php } else { ?>
                                            <span>Đã Hủy</span>
                                        <?php } ?>
                                    </h5>
                                </div>


                                <div class="card-body">
                                    <div class="row">
                                        <!-- Title with Icon and Date -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- Silver Ring Title with Icon -->
                                            <div class="col-md-6 text-right">
                                                <h4 class="mb-0">Silver Ring</h4>
                                            </div>
                                            <!-- Order Date -->
                                            <div class="col-md-6 text-right">
                                                <p>Ngày đặt hàng: <?= date("d/m/Y", strtotime($donhang['ngay_dat_hang'])) ?></p>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <!-- Customer Information Column 1 -->
                                            <div class="col-md-4">
                                                <h5>Người nhận</h5>
                                                <p>Họ tên: <?= $donhang['ho_ten_nguoi_nhan'] ?></p>
                                                <p>Email: <?= $donhang['email_nguoi_nhan'] ?></p>
                                                <p>SĐT: <?= $donhang['sdt_nguoi_nhan'] ?></p>
                                                <p>Địa chỉ: <?= $donhang['dia_chi_nguoi_nhan'] ?></p>
                                            </div>

                                            <!-- Customer Information Column 2 -->
                                            <div class="col-md-4">
                                                <h5>Người nhận</h5>
                                                <p>Họ tên: <?= $donhang['ho_ten_nguoi_nhan'] ?></p>
                                                <p>Email: <?= $donhang['email_nguoi_nhan'] ?></p>
                                                <p>SĐT: <?= $donhang['sdt_nguoi_nhan'] ?></p>
                                                <p>Địa chỉ: <?= $donhang['dia_chi_nguoi_nhan'] ?></p>
                                            </div>

                                            <!-- Customer Information Column 3 -->
                                            <div class="col-md-4">
                                                <h5>Người nhận</h5>
                                                <p>Họ tên: <?= $donhang['ho_ten_nguoi_nhan'] ?></p>
                                                <p>Email: <?= $donhang['email_nguoi_nhan'] ?></p>
                                                <p>SĐT: <?= $donhang['sdt_nguoi_nhan'] ?></p>
                                                <p>Địa chỉ: <?= $donhang['dia_chi_nguoi_nhan'] ?></p>
                                            </div>
                                        </div>
                                        <hr>

                                        <!-- Bảng sản phẩm -->
                                        <h5>Sản phẩm</h5>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Đơn giá</th>
                                                    <th>Số lượng</th>
                                                    <th>Thành tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $tong_tien = 0; ?>
                                                <?php foreach ($sanPhamDonHang as $index => $SanPham): ?>
                                                    <tr>
                                                        <td><?= $index + 1 ?></td>
                                                        <td><?= $SanPham['ten'] ?></td>
                                                        <td><?= number_format($SanPham['don_gia'], 2) ?></td>
                                                        <td><?= $SanPham['so_luong'] ?></td>
                                                        <td><?= number_format($SanPham['thanh_tien'], 2) ?></td>

                                                    </tr>
                                                    <?php $tong_tien += $SanPham['thanh_tien'] ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>

                                        <!-- Tổng kết đơn hàng -->
                                        <div class="d-flex justify-content-between">
                                            <p>Ngày đặt hàng: <?= date("d/m/Y", strtotime($donhang['ngay_dat_hang'])) ?></p>
                                            <p>Mã đơn hàng: <?= $donhang['ma_don_hang'] ?></p>
                                        </div>
                                        <p>Thành tiền:
                                            <?= $tong_tien  ?>
                                        </p>
                                        <p>Vận chuyển: 200.000 </p>
                                        <p>Tổng tiền: <?= $tong_tien + 200000 ?></p>

                                        <!-- Nút điều hướng -->
                                        <div class="d-flex justify-content-between mt-3">
                                            <a href="?act=don-hangs" class="btn btn-primary"><i class="ri-arrow-left-line"></i> Quay lại danh sách đơn hàng</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Velzon.
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>

    <?php require_once "views/layouts/libs_js.php"; ?>
</body>

</html>