<?php require_once 'views/layout/header.php'; ?>

<body class="shop">
    <div id="page" class="hfeed page-wrapper">
        <?php require_once 'views/layout/menu.php'; ?>


        <div id="site-main" class="site-main">
            <div id="main-content" class="main-content">
                <div id="primary" class="content-area">
                    <div id="title" class="page-title">
                        <div class="section-container">
                            <div class="content-title-heading">
                                <h1 class="text-title-heading">
                                    Chi tiết sản phẩm
                                </h1>
                            </div>
                            <div class="breadcrumbs">
                                <a href="?act=home">Trang chủ</a><span class="delimiter"></span><a href="?act=danhsachsanpham">Shop</a><span class="delimiter"></span> Chi tiết sản phẩm
                            </div>
                        </div>
                    </div>

                    <div id="content" class="site-content" role="main">
                        <div class="shop-details zoom" data-product_layout_thumb="scroll" data-zoom_scroll="true" data-zoom_contain_lens="true" data-zoomtype="inner" data-lenssize="200" data-lensshape="square" data-lensborder="" data-bordersize="2" data-bordercolour="#f9b61e" data-popup="false">
                            <div class="product-top-info">
                                <div class="section-padding">
                                    <div class="section-container p-l-r">
                                        <div class="row">
                                            <div class="product-images col-lg-7 col-md-12 col-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="content-thumbnail-scroll">
                                                            <div class="image-thumbnail slick-carousel slick-vertical" data-asnavfor=".image-additional" data-centermode="true" data-focusonselect="true" data-columns4="5" data-columns3="4" data-columns2="4" data-columns1="4" data-columns="4" data-nav="true" data-vertical="&quot;true&quot;" data-verticalswiping="&quot;true&quot;">
                                                                <?php foreach ($albumHinhAnh as $key => $album) : ?>
                                                                    <div class="img-item slick-slide">
                                                                        <span class="img-thumbnail-scroll">
                                                                            <img width="600" height="600" src="<?= $album['album_hinh_anh']; ?>" alt="">
                                                                        </span>
                                                                    </div>
                                                                <?php endforeach; ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="scroll-image main-image">
                                                            <div class="image-additional slick-carousel"
                                                                data-asnavfor=".image-thumbnail" data-fade="true"
                                                                data-columns4="1" data-columns3="1" data-columns2="1"
                                                                data-columns1="1" data-columns="1" data-nav="true">
                                                                <div class="img-item slick-slide">
                                                                    <img width="900" height="900"
                                                                        src="<?= $chiTietSanPham['img']; ?>" alt="" title="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-info col-lg-5 col-md-12 col-12">
                                                <h1 class="title"><?= $chiTietSanPham['ten']; ?></h1>
                                                <span class="price">
                                                    <del aria-hidden="true"><span><?= number_format($chiTietSanPham['gia_ban'], 0, ',', '.'); ?></span></del>
                                                    <ins><span><?= number_format($chiTietSanPham['gia_km'], 0, ',', '.'); ?></span></ins>
                                                </span>
                                                <div class="rating">
                                                    <div class="star star-5"></div>
                                                    <div class="review-count">
                                                        (3<span> đánh giá</span>)
                                                    </div>
                                                </div>
                                                <div class="description">
                                                    <p><?= $chiTietSanPham['mo_ta']; ?></p>
                                                </div>
                                                <div class="variations">
                                                    <table cellspacing="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="label">Size</td>
                                                                <td class="attributes">
                                                                    <ul class="text">
                                                                        <li><span>L</span></li>
                                                                        <li><span>M</span></li>
                                                                        <li><span>S</span></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="label">Color</td>
                                                                <td class="attributes">
                                                                    <ul class="colors">
                                                                        <li><span class="color-1"></span></li>
                                                                        <li><span class="color-2"></span></li>
                                                                        <li><span class="color-3"></span></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <form action="?act=them-gio-hang" method="post">
                                                    <div class="buttons">
                                                        <div class="add-to-cart-wrap">
                                                            <div class="quantity">
                                                                <button type="button" class="plus">+</button>
                                                                <input type="hidden" name="san_pham_id" value="<?= $chiTietSanPham['id'] ?>">
                                                                <input type="number" class="qty" value="1" name="so_luong">
                                                                <button type="button" class="minus">-</button>
                                                            </div>
                                                            <div class="btn-add-to-cart">
                                                                <button tabindex="0">Thêm giỏ hàng</button>
                                                            </div>
                                                        </div>
                                                        <div class="btn-quick-buy" data-title="Wishlist">
                                                            <button class="product-btn">Mua ngay</button>
                                                        </div>
                                                        <div class="btn-wishlist" data-title="Wishlist">
                                                            <button class="product-btn">Thêm vào danh sách yêu thích</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="product-meta">
                                                    <span class="sku-wrapper">Mã đơn hàng: <span class="sku"><?= $chiTietSanPham['ma_san_pham']; ?></span></span>
                                                    <span class="posted-in">Danh mục: <a href="shop-grid-left.html" rel="tag"><?= $chiTietSanPham['ten_danh_muc']; ?></a></span>
                                                    <span class="tagged-as">Số lượng: <a href="shop-grid-left.html" rel="tag"><?= $chiTietSanPham['so_luong']; ?></a></span>
                                                </div>
                                                <div class="social-share">
                                                    <a href="#" title="Facebook" class="share-facebook" target="_blank"><i class="fa fa-facebook"></i>Facebook</a>
                                                    <a href="#" title="Twitter" class="share-twitter"><i class="fa fa-twitter"></i>Twitter</a>
                                                    <a href="#" title="Pinterest" class="share-pinterest"><i class="fa fa-pinterest"></i>Pinterest</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-tabs">
                                <div class="section-padding">
                                    <div class="section-container p-l-r">
                                        <div class="product-tabs-wrap">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Mô tả</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Đánh giá (1)</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="description" role="tabpanel">
                                                    <p><?= $chiTietSanPham['mo_ta_chi_tiet']; ?></p>
                                                </div>
                                                <div class="tab-pane fade" id="additional-information" role="tabpanel">
                                                    <table class="product-attributes">
                                                        <tbody>
                                                            <tr class="attribute-item">
                                                                <th class="attribute-label">Color</th>
                                                                <td class="attribute-value">Antique, Chestnut, Grullo</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane fade" id="reviews" role="tabpanel">
                                                    <div id="reviews" class="product-reviews">
                                                        <div id="comments">
                                                            <h2 class="reviews-title">1 đánh giá cho <span><?= $chiTietSanPham['ten']; ?></span></h2>
                                                            <ol class="comment-list">
                                                                <li class="review">
                                                                    <div class="content-comment-container">
                                                                        <div class="comment-container">
                                                                            <img src="media/testimonial/5.jpg" class="avatar" height="60" width="60" alt="">
                                                                            <div class="comment-text">
                                                                                <div class="rating small">
                                                                                    <div class="star star-5"></div>
                                                                                </div>
                                                                                <div class="review-author"><?= $listBinhLuan['ten_nguoi_binh_luan']; ?></div>
                                                                                <div class="review-time"><?php echo date('F d, Y'); ?></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="description">
                                                                            <p> <?= $listBinhLuan['noi_dung']; ?> </p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ol>
                                                        </div>
                                                        <div id="review-form">
                                                            <div id="respond" class="comment-respond">
                                                                <form action="#" method="post" id="comment-form" class="comment-form">
                                                                    <p class="comment-notes">
                                                                        <span id="email-notes">Địa chỉ email của bạn sẽ không được công bố.</span> Các trường bắt buộc được đánh dấu <span class="required">*</span>
                                                                    </p>
                                                            </div>
                                                            <p class="comment-form-comment">
                                                                <textarea id="comment" name="comment" placeholder="Đánh giá của bạn *" cols="45" rows="8" aria-required="true" required=""></textarea>
                                                            </p>
                                                            <div class="content-info-reviews">
                                                                <p class="comment-form-email">
                                                                    <input id="email" name="email" placeholder="Email của bạn *" type="email" value="" size="30" aria-required="true" required="">
                                                                </p>
                                                                <p class="form-submit">
                                                                    <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                                </p>
                                                            </div>
                                                            </form><!-- #respond -->
                                                            <div class="comment-form-rating">
                                                                <label for="rating">Đánh giá của bạn</label>
                                                                <p class="starss">
                                                                    <span>
                                                                        <a class="star-1" href="#" data-rating="1">★</a>
                                                                        <a class="star-2" href="#" data-rating="2">★</a>
                                                                        <a class="star-3" href="#" data-rating="3">★</a>
                                                                        <a class="star-4" href="#" data-rating="4">★</a>
                                                                        <a class="star-5" href="#" data-rating="5">★</a>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                            <p class="comment-form-comment">
                                                                <textarea id="comment" name="comment" placeholder="Đánh giá của bạn *" cols="45" rows="8" aria-required="true" required=""></textarea>
                                                            </p>
                                                            <div class="content-info-reviews">

                                                                <p class="comment-form-email">
                                                                    <input id="email" name="email" placeholder="Email của bạn *" type="email" value="" size="30" aria-required="true" required="">
                                                                </p>
                                                                <p class="form-submit">
                                                                    <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                                </p>
                                                            </div>
                                                            <!-- Input ẩn để lưu giá trị sao -->
                                                            <input type="hidden" id="rating" name="rating" value="">
                                                            </form><!-- #respond -->
                                                        </div>

                                                    </div>
                                                    <style>
                                                        /* Mặc định màu của các sao */
                                                        .starss a {
                                                            text-decoration: none;
                                                            color: gray;
                                                            /* Màu xám cho sao chưa chọn */
                                                            font-size: 30px;
                                                            /* Kích thước sao */
                                                            margin-right: 5px;
                                                            /* Khoảng cách giữa các sao */
                                                        }

                                                        /* Khi sao được chọn (có lớp 'active') */
                                                        .starss a.active {
                                                            color: gold;
                                                            /* Màu vàng khi sao được chọn */
                                                        }

                                                        /* Khi hover (di chuột lên sao) */
                                                        .starss a:hover {

                                                            color: gold;
                                                            /* Màu vàng khi hover lên sao */
                                                        }
                                                    </style>

                                                    <script>
                                                        // JavaScript để xử lý sự kiện chọn sao
                                                        const starss = document.querySelectorAll('.starss a');
                                                        const ratingInput = document.getElementById('rating');

                                                        starss.forEach(star => {
                                                            star.addEventListener('click', function(e) {
                                                                e.preventDefault(); // Ngừng hành động mặc định của thẻ <a> (không reload trang)

                                                                // Xóa lớp active khỏi tất cả các sao
                                                                starss.forEach(star => star.classList.remove('active'));

                                                                // Lấy giá trị sao được chọn
                                                                const selectedRating = parseInt(this.getAttribute('data-rating'));

                                                                // Thêm lớp active cho tất cả các sao có giá trị <= sao đã chọn
                                                                starss.forEach(star => {
                                                                    const starRating = parseInt(star.getAttribute('data-rating'));
                                                                    if (starRating <= selectedRating) {
                                                                        star.classList.add('active');
                                                                    }
                                                                });

                                                                // Cập nhật giá trị sao vào input ẩn
                                                                ratingInput.value = selectedRating;
                                                            });
                                                        });
                                                    </script>


                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-related">
                            <div class="section-padding">
                                <div class="section-container p-l-r">
                                    <div class="block block-products slider">
                                        <div class="block-title">
                                            <h2>Sản phẩm liên quan</h2>
                                        </div>
                                        <div class="block-content">
                                            <div class="content-product-list slick-wrap">
                                                <div class="slick-sliders products-list grid" data-slidestoscroll="true" data-dots="false" data-nav="1" data-columns4="1" data-columns3="2" data-columns2="3" data-columns1="3" data-columns1440="4" data-columns="4">
                                                    <?php foreach ($listSanPhamCungDanhMuc as $key => $sanPhamLienQuan) : ?>

                                                        <div clas s="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="?act=chitietsanpham&id=<?= $sanPhamLienQuan['id'] ?>">
                                                                                <img width="600" height="600" src="<?= $sanPhamLienQuan['img'] ?>" class="post-image" alt="">
                                                                                <img width="600" height="600" src="<?= $sanPhamLienQuan['img'] ?>" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Thêm vào giỏ hàng</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Thêm vào danh sách yêu thích</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">So sánh</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Xem nhanh <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents">
                                                                            <div class="rating">
                                                                                <div class="star star-0"></div><span class="count">(0 review)</span>
                                                                            </div>
                                                                            <h3 class="product-title"><a href="shop-details.html"><?= $sanPhamLienQuan['ten'] ?></a></h3>
                                                                            <span class="price"><?= $sanPhamLienQuan['gia_ban'] ?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- #content -->
            </div><!-- #primary -->
        </div><!-- #main-content -->
    </div>

    <?php require_once "views/layout/footer.php"; ?>
    </div>

    <!-- Back Top button -->
    <div class="back-top button-show">
        <i class="arrow_carrot-up"></i>
    </div>

    <!-- Search -->
    <div class="search-overlay">
        <div class="close-search"></div>
        <div class="wrapper-search">
            <form role="search" method="get" class="search-from ajax-search" action="#">
                <a href="#" class="search-close"></a>
                <div class="search-box">
                    <button id="searchsubmit" class="btn" type="submit">
                        <i class="icon-search"></i>
                    </button>
                    <input type="text" autocomplete="off" value="" name="s" class="input-search s" placeholder="Search...">
                    <div class="content-menu_search">
                        <label>Suggested</label>
                        <ul id="menu_search" class="menu">
                            <li><a href="#">Earrings</a></li>
                            <li><a href="#">Necklaces</a></li>
                            <li><a href="#">Bracelets</a></li>
                            <li><a href="#">Jewelry Box</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Wishlist -->
    <!-- <div class="wishlist-popup">
        <div class="wishlist-popup-inner">
            <div class="wishlist-popup-content">
                <div class="wishlist-popup-content-top">
                    <span class="wishlist-name">Wishlist</span>
                    <span class="wishlist-count-wrapper"><span class="wishlist-count">2</span></span>
                    <span class="wishlist-popup-close"></span>
                </div>
                <div class="wishlist-popup-content-mid">
                    <table class="wishlist-items">
                        <tbody>
                            <tr class="wishlist-item">
                                <td class="wishlist-item-remove"><span></span></td>
                                <td class="wishlist-item-image">
                                    <a href="shop-details.html">
                                        <img width="600" height="600" src="media/product/3.jpg" alt="">
                                    </a>
                                </td>
                                <td class="wishlist-item-info">
                                    <div class="wishlist-item-name">
                                        <a href="shop-details.html">Twin Hoops</a>
                                    </div>
                                    <div class="wishlist-item-price">
                                        <span>$150.00</span>
                                    </div>
                                    <div class="wishlist-item-time">June 4, 2023</div>
                                </td>
                                <td class="wishlist-item-actions">
                                    <div class="wishlist-item-stock">
                                        In stock
                                    </div>
                                    <div class="wishlist-item-add">
                                        <div data-title="Add to cart">
                                            <a rel="nofollow" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="wishlist-item">
                                <td class="wishlist-item-remove"><span></span></td>
                                <td class="wishlist-item-image">
                                    <a href="shop-details.html">
                                        <img width="600" height="600" src="media/product/4.jpg" alt="">
                                    </a>
                                </td>
                                <td class="wishlist-item-info">
                                    <div class="wishlist-item-name">
                                        <a href="shop-details.html">Yilver And Turquoise Earrings</a>
                                    </div>
                                    <div class="wishlist-item-price">
                                        <del aria-hidden="true"><span>$150.00</span></del>
                                        <ins><span>$100.00</span></ins>
                                    </div>
                                    <div class="wishlist-item-time">June 4, 2023</div>
                                </td>
                                <td class="wishlist-item-actions">
                                    <div class="wishlist-item-stock">
                                        In stock
                                    </div>
                                    <div class="wishlist-item-add">
                                        <div data-title="Add to cart">
                                            <a rel="nofollow" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="wishlist-popup-content-bot">
                    <div class="wishlist-popup-content-bot-inner">
                        <a class="wishlist-page" href="shop-wishlist.html">
                            Open wishlist page
                        </a>
                        <span class="wishlist-continue" data-url="">
                            Continue shopping
                        </span>
                    </div>
                    <div class="wishlist-notice wishlist-notice-show">Added to the wishlist!</div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Compare -->
    <!-- <div class="compare-popup">
        <div class="compare-popup-inner">
            <div class="compare-table">
                <div class="compare-table-inner">
                    <a href="#" id="compare-table-close" class="compare-table-close">
                        <span class="compare-table-close-icon"></span>
                    </a>
                    <div class="compare-table-items">
                        <table id="product-table" class="product-table">
                            <thead>
                                <tr>
                                    <th>
                                        <a href="#" class="compare-table-settings">Settings</a>
                                    </th>
                                    <th>
                                        <a href="shop-details.html">Twin Hoops</a> <span class="remove">remove</span>
                                    </th>
                                    <th>
                                        <a href="shop-details.html">Medium Flat Hoops</a> <span class="remove">remove</span>
                                    </th>
                                    <th>
                                        <a href="shop-details.html">Bold Pearl Hoop Earrings</a> <span class="remove">remove</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tr-image">
                                    <td class="td-label">Image</td>
                                    <td>
                                        <a href="shop-details.html">
                                            <img width="600" height="600" src="media/product/3.jpg" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="shop-details.html">
                                            <img width="600" height="600" src="media/product/1.jpg" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="shop-details.html">
                                            <img width="600" height="600" src="media/product/2.jpg" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="tr-sku">
                                    <td class="td-label">SKU</td>
                                    <td>VN00189</td>
                                    <td></td>
                                    <td>D1116</td>
                                </tr>
                                <tr class="tr-rating">
                                    <td class="td-label">Rating</td>
                                    <td>
                                        <div class="star-rating">
                                            <span style="width:80%"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="star-rating">
                                            <span style="width:100%"></span>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr class="tr-price">
                                    <td class="td-label">Price</td>
                                    <td><span class="amount">$150.00</span></td>
                                    <td><del><span class="amount">$150.00</span></del> <ins><span class="amount">$100.00</span></ins></td>
                                    <td><span class="amount">$200.00</span></td>
                                </tr>
                                <tr class="tr-add-to-cart">
                                    <td class="td-label">Add to cart</td>
                                    <td>
                                        <div data-title="Add to cart">
                                            <a href="#" class="button">Add to cart</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-title="Add to cart">
                                            <a href="#" class="button">Add to cart</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-title="Add to cart">
                                            <a href="#" class="button">Add to cart</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="tr-description">
                                    <td class="td-label">Description</td>
                                    <td>Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum gravida nec dui. Aenean aliquam varius ipsum, non ultricies tellus sodales eu. Donec dignissim viverra nunc, ut aliquet magna posuere eget.</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</td>
                                    <td>The EcoSmart Fleece Hoodie full-zip hooded jacket provides medium weight fleece comfort all year around. Feel better in this sweatshirt because Hanes keeps plastic bottles of landfills by using recycled polyester.7.8 ounce fleece sweatshirt made with up to 5 percent polyester created from recycled plastic.</td>
                                </tr>
                                <tr class="tr-content">
                                    <td class="td-label">Content</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</td>
                                </tr>
                                <tr class="tr-dimensions">
                                    <td class="td-label">Dimensions</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Page Loader -->
    <!-- <div class="page-preloader">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div> -->

    <!-- Dependency Scripts -->

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>
</body>

<!-- Mirrored from caketheme.com/html/mojuri/shop-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Nov 2024 11:03:01 GMT -->

</html>