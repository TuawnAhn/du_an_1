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
                                <h4 class="mb-sm-0">Chi tiết đơn hàng #<?= $donhang['ma_don_hang'] ?></h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item"><a href="?act=list-orders">Danh sách đơn hàng</a></li>
                                        <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Thông tin chi tiết đơn hàng -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0" style="color: #ffff">Thông tin chi tiết đơn hàng</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Bảng thông tin đơn hàng -->
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr>
                                                <th class="bg-light">Mã đơn hàng:</th>
                                                <td><?= $donhang['ma_don_hang'] ?></td>
                                            </tr>
                                            <tr>
                                                <th class="bg-light">Họ tên người nhận:</th>
                                                <td><?= $donhang['ho_ten_nguoi_nhan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th class="bg-light">SĐT người nhận:</th>
                                                <td><?= $donhang['sdt_nguoi_nhan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th class="bg-light">Địa chỉ người nhận:</th>
                                                <td><?= $donhang['dia_chi_nguoi_nhan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th class="bg-light">Ngày đặt hàng:</th>
                                                <td><?= date("d/m/Y", strtotime($donhang['ngay_dat_hang'])) ?></td>
                                            </tr>
                                            <tr>
                                                <th class="bg-light">Trạng thái đơn hàng:</th>
                                                <td>
                                                    <?php
                                                    switch ($donhang['trang_thai_don_hang']) {
                                                        case 1:
                                                            echo '<span class="badge bg-warning">Chờ xác nhận</span>';
                                                            break;
                                                        case 2:
                                                            echo '<span class="badge bg-info">Đã xác nhận</span>';
                                                            break;
                                                        case 3:
                                                            echo '<span class="badge bg-primary">Đang giao</span>';
                                                            break;
                                                        case 4:
                                                            echo '<span class="badge bg-success">Đã giao</span>';
                                                            break;
                                                        case 5:
                                                            echo '<span class="badge bg-dark">Đã hoàn thành</span>';
                                                            break;
                                                        case 6:
                                                            echo '<span class="badge bg-danger">Đã thất bại</span>';
                                                            break;
                                                        default:
                                                            echo '<span class="badge bg-secondary">Đã hủy</span>';
                                                            break;
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="bg-light">Trạng thái thanh toán:</th>
                                                <td>
                                                    <?= $donhang['trang_thai_thanh_toan_id'] == 1 ? '<span class="badge bg-success">Đã thanh toán</span>' : '<span class="badge bg-danger">Chưa thanh toán</span>' ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- Nút điều hướng -->
                                    <div class="d-flex justify-content-between">
                                        <a href="?act=don-hangs" class="btn btn-primary"><i class="ri-arrow-left-line"></i> Quay lại danh sách đơn hàng</a>
                                        <a href="?act=form-sua-don-hang&id=<?= $donhang['id'] ?>" class="btn btn-success"><i class="ri-edit-2-line"></i> Sửa đơn hàng</a>
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