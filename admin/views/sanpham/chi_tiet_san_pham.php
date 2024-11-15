<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>Quản lý Chi Tiết Sản Phẩm | Silver Ring</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin Product Detail Page" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- CSS -->
    <?php require_once "views/layouts/libs_css.php"; ?>
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- HEADER -->
        <?php require_once "views/layouts/header.php"; ?>
        <?php require_once "views/layouts/siderbar.php"; ?>

        <div class="vertical-overlay"></div>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Tiêu đề trang -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Quản lý Chi Tiết Sản Phẩm - <?= $SanPham['ten'] ?></h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="?act=products">Danh sách Sản Phẩm</a></li>
                                        <li class="breadcrumb-item active">Chi Tiết Sản Phẩm</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Thông tin sản phẩm -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <?php if (!empty($SanPham['img'])): ?>
                                    <div>
                                        <img src="<?= $SanPham['img'] ?>" alt="Hình ảnh hiện tại" style="width: 800px; height: 445px; ">

                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h1><?= $SanPham['ten'] ?></h1>
                                    <h5><strong>Mã sản phẩm:</strong> <?= $SanPham['ten'] ?></h5>
                                    <h3 class="text-danger"><?= number_format($SanPham['gia_ban'], 0, ',', '.') ?> VND</h3>
                                    <h5 class="text-danger"><del><?= number_format($SanPham['gia_km'], 0, ',', '.') ?> VND</del></h5>
                                    <hr>
                                    <p><strong>Danh mục:</strong> <?= $SanPham['danh_muc_id'] ?></p>
                                    <p><strong>Số lượng trong kho:</strong> <?= $SanPham['so_luong'] ?></p>
                                    <p><strong>Tình trạng:</strong> <?= $SanPham['trang_thai'] ? 'Còn hàng' : 'Hết hàng' ?></p>


                                    <!-- Thao tác quản lý -->
                                    <hr>
                                    <a href="?act=form-sua-san-pham&san_pham_id=<?= $SanPham['id'] ?>" class="btn btn-warning"><i class="ri-edit-2-line"></i> Chỉnh sửa</a>
                                    <a href="?act=xoa-san-pham&san_pham_id=<?= $SanPham['id'] ?>" class="btn btn-danger"><i class="ri-delete-bin-6-line"></i> Xóa</a>
                                </div>
                            </div>
                        </div>

                        <!-- Thông tin chi tiết sản phẩm -->
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-dark text-white">
                                        <h5 class="card-title mb-0" style="color: white;">Mô tả Chi Tiết Sản Phẩm</h5>
                                    </div>
                                    <div class="card-body">
                                        <p><?= $SanPham['mo_ta'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Đánh giá sản phẩm -->
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-info text-white">
                                        <h5 class="card-title mb-0" style="color: white;">Đánh Giá Sản Phẩm</h5>
                                    </div>
                                    <div class="card-body">
                                        <?php if (empty($danhgiaSanPham)) : ?>
                                            <p>Chưa có đánh giá cho sản phẩm này.</p>
                                        <?php else : ?>
                                            <?php foreach ($danhgiasanpham as $danhgia): ?>
                                                <div class="media mb-4">
                                                    <img class="mr-3 rounded-circle" src="<?= $danhgia['user_avatar'] ?>" alt="User avatar" width="50">
                                                    <div class="media-body">
                                                        <h6 class="mt-0"><?= $danhgia['username'] ?> <small class="text-muted"><?= date("d/m/Y", strtotime($danhgia['ngay_danh_gia'])) ?></small></h6>
                                                        <p><?= $danhgia['noi_dung'] ?></p>
                                                        <a href="?act=delete-review&id=<?= $danhgia['id'] ?>" class="text-danger" onclick="return confirm('Bạn có chắc muốn xóa đánh giá này không?')"><i class="ri-delete-bin-6-line"></i> Xóa đánh giá</a>
                                                    </div>
                                                </div>
                                                <hr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bình luận sản phẩm -->
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-secondary text-white">
                                        <h5 class="card-title mb-0" style="color: white;">Bình Luận Sản Phẩm</h5>
                                    </div>
                                    <div class="card-body">
                                        <?php if (empty($binhluansanpham)) : ?>
                                            <p>Chưa có bình luận cho sản phẩm này.</p>
                                        <?php else : ?>
                                            <?php foreach ($binhluansanpham as $binhluan): ?>
                                                <div class="media mb-4">
                                                    <img class="mr-3 rounded-circle" src="<?= $binhluan['user_avatar'] ?>" alt="User avatar" width="50">
                                                    <div class="media-body">
                                                        <h6 class="mt-0"><?= $binhluan['username'] ?> <small class="text-muted"><?= date("d/m/Y H:i", strtotime($binhluan['ngay_binh_luan'])) ?></small></h6>
                                                        <p><?= $binhluan['noi_dung'] ?></p>
                                                        <a href="?act=delete-comment&id=<?= $binhluan['id'] ?>" class="text-danger" onclick="return confirm('Bạn có chắc muốn xóa bình luận này không?')"><i class="ri-delete-bin-6-line"></i> Xóa bình luận</a>
                                                    </div>
                                                </div>
                                                <hr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
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
                                </script> © Silver Ring.
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <?php require_once "views/layouts/libs_js.php"; ?>
</body>

</html>