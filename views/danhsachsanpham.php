<?php require_once 'views/layout/header.php'; ?>

<body class="shop">
    <?php require_once 'views/layout/menu.php'; ?>
    <div id="page" class="hfeed page-wrapper">
        <div id="site-main" class="site-main">
            <div id="main-content" class="main-content">
                <div id="primary" class="content-area">
                    <div id="title" class="page-title">
                        <div class="section-container">
                            <div class="content-title-heading">
                                <h1 class="text-title-heading">Sản phẩm</h1>
                            </div>
                            <div class="breadcrumbs">
                                <a href="?act=home">Trang chủ</a><span class="delimiter"></span><a
                                    href="?act=danhsachsanpham">Shop</a><span class="delimiter"></span>Sản phẩm
                            </div>
                        </div>
                    </div>

                    <div id="content" class="site-content" role="main">
                        <div class="section-padding">
                            <div class="section-container p-l-r">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-12 sidebar left-sidebar md-b-50 p-t-10">
                                        <!-- Block Product Categories -->
                                        <div class="block block-product-cats">
                                            <div class="block-title">
                                                <h2>Danh mục</h2>
                                            </div>
                                            <?php foreach ($listDanhMuc as $key => $danhMuc) : ?>
                                                <div class="block-content">
                                                    <div class="product-cats-list">
                                                        <ul>
                                                            <li class="current">
                                                                <a href="?act=danh-muc-san-pham&iddm=<?= $danhMuc['id'] ?>">
                                                                    <?= $danhMuc['ten_danh_muc'] ?>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <form method="GET" action="index.php">
                                            <input type="hidden" name="act" value="loc-san-pham-theo-gia" />
                                            <div class="mb-3">
                                                <label for="min_price" class="form-label">Giá thấp nhất:</label>
                                                <input type="number" id="min_price" name="min_price"
                                                    class="form-control"
                                                    value="<?= isset($_GET['min_price']) ? htmlspecialchars($_GET['min_price']) : 0 ?>"
                                                    min="0" required />
                                            </div>
                                            <div class="mb-3">
                                                <label for="max_price" class="form-label">Giá cao nhất:</label>
                                                <input type="number" id="max_price" name="max_price"
                                                    class="form-control"
                                                    value="<?= isset($_GET['max_price']) ? htmlspecialchars($_GET['max_price']) : 1000000 ?>"
                                                    min="0" required />
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary"
                                                    style="background-color: #ff0000; border-color: #ff0000; margin-top: 10px">Tìm
                                                    sản phẩm</button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                                        <div class="products-topbar clearfix">
                                            <div class="products-topbar-left">
                                                <div class="products-count">
                                                    Hiển thị tất cả <?= count($products) ?> sản phẩm
                                                </div>

                                            </div>
                                            <div class="products-topbar-right">
                                                <div class="products-sort dropdown">
                                                    <span class="sort-toggle dropdown-toggle" data-toggle="dropdown"
                                                        aria-expanded="true">Sắp xếp mặc định</span>
                                                    <ul class="sort-list dropdown-menu" x-placement="bottom-start">
                                                        <li class="active"><a href="#">Sắp xếp mặc định</a></li>
                                                        <li><a href="#">Sort by popularity</a></li>
                                                        <li><a href="#">Sắp xếp theo mức độ phổ biến</a></li>
                                                        <li><a href="#">Sắp xếp theo mới nhất</a></li>
                                                        <li><a href="#">Sắp xếp theo giá: thấp đến cao</a></li>
                                                        <li><a href="#">Sắp xếp theo giá: cao xuống thấp</a></li>
                                                    </ul>
                                                </div>
                                                <ul class="layout-toggle nav nav-tabs">
                                                    <li class="nav-item">
                                                        <a class="layout-grid nav-link active" data-toggle="tab"
                                                            href="#layout-grid" role="tab"><span
                                                                class="icon-column"><span
                                                                    class="layer first"><span></span><span></span><span></span></span><span
                                                                    class="layer middle"><span></span><span></span><span></span></span><span
                                                                    class="layer last"><span></span><span></span><span></span></span></span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="layout-list nav-link" data-toggle="tab"
                                                            href="#layout-list" role="tab"><span
                                                                class="icon-column"><span
                                                                    class="layer first"><span></span><span></span></span><span
                                                                    class="layer middle"><span></span><span></span></span><span
                                                                    class="layer last"><span></span><span></span><span></span></span></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="layout-grid" role="tabpanel">
                                                <div class="products-list grid">
                                                    <div class="row">
                                                        <?php foreach ($listSanPham as $key => $sanPham): ?>
                                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a
                                                                                href="?act=chitietsanpham&id=<?= $sanPham['id'] ?>">
                                                                                <img width="600" height="600"
                                                                                    src="<?= $sanPham['img'] ?>"
                                                                                    class="post-image" alt="">
                                                                                <img width="600" height="600"
                                                                                    src="<?= $sanPham['img'] ?>"
                                                                                    class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart"
                                                                                data-title="Add to cart">
                                                                                <a rel="nofollow" href="#"
                                                                                    class="product-btn">Add to cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to
                                                                                    wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview"
                                                                                data-title="Quick View">
                                                                                <a href="#"
                                                                                    class="quickview quickview-button">Quick
                                                                                    View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <div class="rating">
                                                                                <div class="star star-0"></div><span
                                                                                    class="count">(0 review)</span>
                                                                            </div>
                                                                            <h3 class="product-title"><a
                                                                                    href="shop-details.html">
                                                                                    <?= $sanPham['ten'] ?>
                                                                                </a></h3>
                                                                            <span class="price">
                                                                                <?= number_format($sanPham['gia_ban'], 0, ',', '.') ?>đ
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Phân Trang -->
                                        <nav class="pagination">
                                            <?php require_once 'views/layout/pagination.php'; ?>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- #content -->
                </div><!-- #primary -->
            </div><!-- #main-content -->
        </div>

        <?php require_once './views/layout/footer.php'; ?>

    </div>
    <?php if (empty($products)): ?>
        <div class="alert alert-warning" role="alert">
            Không có sản phẩm nào phù hợp với tiêu chí lọc của bạn.
        </div>
    <?php endif; ?>