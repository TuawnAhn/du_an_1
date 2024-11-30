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
                                <a href="?act=home">Trang chủ</a><span class="delimiter"></span><a
                                    href="?act=danhsachsanpham">Shop</a><span class="delimiter"></span> Chi tiết sản
                                phẩm
                            </div>
                        </div>
                    </div>

                    <div id="content" class="site-content" role="main">
                        <div class="shop-details zoom" data-product_layout_thumb="scroll" data-zoom_scroll="true"
                            data-zoom_contain_lens="true" data-zoomtype="inner" data-lenssize="200"
                            data-lensshape="square" data-lensborder="" data-bordersize="2" data-bordercolour="#f9b61e"
                            data-popup="false">
                            <div class="product-top-info">
                                <div class="section-padding">
                                    <div class="section-container p-l-r">
                                        <div class="row">
                                            <div class="product-images col-lg-7 col-md-12 col-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="content-thumbnail-scroll">
                                                            <div class="image-thumbnail slick-carousel slick-vertical"
                                                                data-asnavfor=".image-additional" data-centermode="true"
                                                                data-focusonselect="true" data-columns4="5"
                                                                data-columns3="4" data-columns2="4" data-columns1="4"
                                                                data-columns="4" data-nav="true"
                                                                data-vertical="&quot;true&quot;"
                                                                data-verticalswiping="&quot;true&quot;">
                                                                <?php foreach ($albumHinhAnh as $key => $album): ?>
                                                                    <div class="img-item slick-slide">
                                                                        <span class="img-thumbnail-scroll">
                                                                            <img width="600" height="600"
                                                                                src="<?= $album['album_hinh_anh']; ?>"
                                                                                alt="">
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
                                                                        src="<?= $chiTietSanPham['img']; ?>" alt=""
                                                                        title="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-info col-lg-5 col-md-12 col-12">
                                                <h1 class="title"><?= $chiTietSanPham['ten']; ?></h1>
                                                <span class="price">
                                                    <del
                                                        aria-hidden="true"><span><?= number_format($chiTietSanPham['gia_ban'], 0, ',', '.'); ?></span></del>
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

                                                <form action="?act=them-gio-hang" method="POST">
                                                    <div class="buttons">
                                                        <div class="add-to-cart-wrap">
                                                            <div class="quantity">
                                                                <input type="hidden" name="san_pham_id"
                                                                    value="<?= $chiTietSanPham['san_pham_id']; ?>">
                                                                <button type="button" class="plus">+</button>
                                                                <input type="number" class="qty" value="1"
                                                                    name="so_luong">
                                                                <button type="button" class="minus">-</button>
                                                            </div>
                                                            <div class="btn-add-to-cart1">
                                                                <button tabindex="0">Thêm giỏ hàng</button>

                                                            </div>
                                                        </div>
                                                </form>
                                                <style>
                                                    /* Phong cách cho nút Thêm giỏ hàng */
                                                    .btn-add-to-cart1 button {
                                                        background-color: black;
                                                        /* Màu nền đen */
                                                        color: white;
                                                        /* Màu chữ trắng */
                                                        border: none;
                                                        /* Bỏ viền */
                                                        padding: 10px 20px;
                                                        /* Khoảng cách bên trong nút */

                                                        cursor: pointer;
                                                        /* Con trỏ thay đổi thành dạng nhấp chuột */
                                                        border-radius: 5px;
                                                        /* Bo góc */
                                                        transition: all 0.3s ease;
                                                        /* Hiệu ứng mượt khi hover */
                                                        width: 200px;
                                                        /* Đặt cùng chiều rộng */
                                                        height: 50px;
                                                    }

                                                    .btn-add-to-cart1 button:hover {
                                                        background-color: #444444;
                                                        /* Màu nền khi hover */
                                                        color: #ffff;
                                                        /* Màu chữ khi hover */
                                                        transform: scale(1.05);
                                                        /* Tăng kích thước một chút khi hover */
                                                        background-color: #b76e4e;
                                                    }

                                                    /* Đảm bảo căn chỉnh nút trong layout */
                                                    .add-to-cart-wrap {
                                                        display: flex;
                                                        align-items: center;
                                                        justify-content: flex-start;
                                                        /* Căn nút về bên trái */
                                                        gap: 15px;
                                                        /* Khoảng cách giữa các phần tử */
                                                    }


                                                    .btn-add-to-cart button {
                                                        background-color: transparent;
                                                        /* Nền trong suốt cho nút */
                                                        color: white;
                                                        /* Màu chữ trắng */
                                                        border: none;
                                                        /* Không viền */
                                                        padding: 10px 20px;
                                                        /* Padding cho nút */
                                                        font-size: 16px;
                                                        /* Kích thước chữ */
                                                        font-family: Arial, sans-serif;
                                                        /* Font chữ */
                                                        cursor: pointer;
                                                        /* Hiển thị con trỏ khi di chuột qua */
                                                        border-radius: 5px;
                                                        /* Bo góc */
                                                        transition: background-color 0.3s;
                                                        /* Hiệu ứng chuyển màu khi hover */
                                                    }

                                                    .btn-add-to-cart button:hover {
                                                        background-color: #A65E4E;
                                                        /* Màu nền khi hover */
                                                    }

                                                    .btn-add-to-cart button:focus {
                                                        outline: none;
                                                        /* Ẩn viền mặc định khi nút được chọn */
                                                        box-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
                                                        /* Hiệu ứng nhấn */
                                                    }

                                                    .btn-quick-buy button {
                                                        border-radius: 5px;
                                                        /* Bo góc */
                                                        transition: all 0.3s ease;
                                                        /* Hiệu ứng mượt khi hover */
                                                    }
                                                </style>

                                                <div class="btn-quick-buy" data-title="Wishlist">
                                                    <button class="product-btn">Mua ngay</button>
                                                </div>
                                                <div class="btn-wishlist" data-title="Wishlist">
                                                    <button class="product-btn">Thêm vào danh sách yêu thích</button>
                                                </div>

                                            </div>
                                            <div class="product-meta">
                                                <span class="sku-wrapper">Mã đơn hàng: <span
                                                        class="sku"><?= $chiTietSanPham['ma_san_pham']; ?></span></span>
                                                <span class="posted-in">Danh mục: <a href="shop-grid-left.html"
                                                        rel="tag"><?= $chiTietSanPham['ten_danh_muc']; ?></a></span>
                                                <span class="tagged-as">Số lượng: <a href="shop-grid-left.html"
                                                        rel="tag"><?= $chiTietSanPham['so_luong']; ?></a></span>
                                            </div>
                                            <div class="social-share">
                                                <a href="#" title="Facebook" class="share-facebook" target="_blank"><i
                                                        class="fa fa-facebook"></i>Facebook</a>
                                                <a href="#" title="Twitter" class="share-twitter"><i
                                                        class="fa fa-twitter"></i>Twitter</a>
                                                <a href="#" title="Pinterest" class="share-pinterest"><i
                                                        class="fa fa-pinterest"></i>Pinterest</a>
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
                                                <a class="nav-link active" data-toggle="tab" href="#description"
                                                    role="tab">Mô tả</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Bình
                                                    luận</a>
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
                                                        <h2 class="reviews-title">Những bình luận cho
                                                            <span><?= $chiTietSanPham['ten']; ?></span></h2>
                                                        <ol class="comment-list">
                                                            <li class="review">

                                                                <?php foreach ($listBinhLuan as $BinhLuan): ?>
                                                                    <div class="content-comment-container">
                                                                        <div class="comment-container">
                                                                            <img src="media/testimonial/5.jpg"
                                                                                class="avatar" height="60" width="60"
                                                                                alt="">
                                                                            <div class="comment-text">
                                                                                <div class="rating small">

                                                                                </div>
                                                                                <div class="review-author">
                                                                                    <?= $BinhLuan['ten_nguoi_binh_luan']; ?>
                                                                                </div>
                                                                                <div class="review-time">
                                                                                    <?php echo date('d-m-Y,H:i '); ?></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="description">
                                                                            <p> <?= $BinhLuan['noi_dung']; ?> </p>
                                                                        </div>

                                                                    </div>
                                                                <?php endforeach; ?>
                                                            </li>
                                                        </ol>
                                                    </div>

                                                    <div id="review-form">
                                                        <div id="respond" class="comment-respond">
                                                            <form action="?act=them-binh-luan" method="post"
                                                                id="comment-form" class="comment-form">
                                                                <p class="comment-notes">
                                                                    <span id="email-notes">Địa chỉ email của bạn sẽ
                                                                        không được công bố.</span> Các trường bắt buộc
                                                                    được đánh dấu <span class="required">*</span>
                                                                </p>
                                                                <!-- <div class="comment-form-rating">
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
                                                                        </div> -->
                                                                <div class="comment-form-container">

                                                                    <div class="comment-form-comment">
                                                                        <label for="comment">Bình luận của bạn *</label>
                                                                        <textarea id="comment" name="comment"
                                                                            placeholder="Bình luận của bạn" cols="45"
                                                                            rows="8" aria-required="true"
                                                                            required></textarea>
                                                                    </div>
                                                                    <input type="hidden" name="san_pham_id"
                                                                        value="<?= $san_pham_id ?>">


                                                                    <p class="form-submit">
                                                                        <input name="submit" type="submit" id="submit"
                                                                            class="submit" value="Gửi">
                                                                    </p>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <style>
                                                        /* Container for the comment form */
                                                        .comment-form-container {
                                                            width: 100%;

                                                            margin: 0 auto;
                                                            padding: 20px;

                                                            border: 1px solid #ddd;
                                                            border-radius: 8px;
                                                        }

                                                        .input {
                                                            width: 92%;
                                                            border-radius: 6px;
                                                            border: 1px solid #ccc;
                                                        }


                                                        /* Style for the textarea */
                                                        .comment-form-comment textarea {
                                                            width: 100%;
                                                            padding: 12px;
                                                            font-size: 16px;
                                                            border-radius: 6px;
                                                            border: 1px solid #ccc;
                                                            resize: vertical;
                                                            box-sizing: border-box;
                                                        }

                                                        /* Add some margin between the textarea and submit button */
                                                        .form-submit {
                                                            text-align: right;
                                                            margin-top: 15px;
                                                        }

                                                        /* Style for the submit button */
                                                        .form-submit .submit {
                                                            padding: 10px 20px;
                                                            font-size: 16px;
                                                            background-color: #4CAF50;
                                                            color: white;
                                                            border: none;
                                                            border-radius: 6px;
                                                            cursor: pointer;
                                                            transition: background-color 0.3s ease;
                                                        }

                                                        .form-submit .submit:hover {
                                                            background-color: #45a049;
                                                        }

                                                        /* Add responsiveness */
                                                        @media (max-width: 600px) {
                                                            .comment-form-container {
                                                                padding: 15px;
                                                            }

                                                            .comment-form-comment textarea {
                                                                font-size: 14px;
                                                                padding: 10px;
                                                            }

                                                            .form-submit .submit {
                                                                font-size: 14px;
                                                            }
                                                        }

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
                                                            star.addEventListener('click', function (e) {
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
                                                <div class="slick-sliders products-list grid" data-slidestoscroll="true"
                                                    data-dots="false" data-nav="1" data-columns4="1" data-columns3="2"
                                                    data-columns2="3" data-columns1="3" data-columns1440="4"
                                                    data-columns="4">
                                                    <?php foreach ($listSanPhamCungDanhMuc as $key => $sanPhamLienQuan): ?>

                                                        <div clas s="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a
                                                                                href="?act=chitietsanpham&id=<?= $sanPhamLienQuan['id'] ?>">
                                                                                <img width="600" height="600"
                                                                                    src="<?= $sanPhamLienQuan['img'] ?>"
                                                                                    class="post-image" alt="">
                                                                                <img width="600" height="600"
                                                                                    src="<?= $sanPhamLienQuan['img'] ?>"
                                                                                    class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart"
                                                                                data-title="Add to cart">
                                                                                <a rel="nofollow" href="?act=them-gio-hang"
                                                                                    class="product-btn button">Thêm vào giỏ
                                                                                    hàng</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Thêm vào danh
                                                                                    sách yêu thích</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">So sánh</button>
                                                                            </div>
                                                                            <span class="product-quickview"
                                                                                data-title="Quick View">
                                                                                <a href="#"
                                                                                    class="quickview quickview-button">Xem
                                                                                    nhanh <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents">
                                                                            <div class="rating">
                                                                                <div class="star star-0"></div><span
                                                                                    class="count">(0 review)</span>
                                                                            </div>
                                                                            <h3 class="product-title"><a
                                                                                    href="shop-details.html"><?= $sanPhamLienQuan['ten'] ?></a>
                                                                            </h3>
                                                                            <span
                                                                                class="price"><?= $sanPhamLienQuan['gia_ban'] ?></span>
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

    <footer id="site-footer" class="site-footer background four-columns">
        <div class="footer">
            <div class="section-padding">
                <div class="section-container">
                    <div class="block-widget-wrap">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 column-1">
                                <div class="block block-menu m-b-20">
                                    <h2 class="block-title">Contact Us</h2>
                                    <div class="block-content">
                                        <ul>
                                            <li>
                                                <span>Head Office:</span> 26 Wyle Cop, Shrewsbury, Shropshire, SY1 1XD
                                            </li>
                                            <li>
                                                <span>Tel:</span> 01743 234500
                                            </li>
                                            <li>
                                                <span>Email:</span> <a
                                                    href="mailto:support@mojuri.com">support@mojuri.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="block block-social">
                                    <ul class="social-link">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 column-2">
                                <div class="block block-menu">
                                    <h2 class="block-title">Customer Services</h2>
                                    <div class="block-content">
                                        <ul>
                                            <li>
                                                <a href="shop-grid-left.html">Contact Us</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-left.html">Track Your Order</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-left.html">Product Care & Repair</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-left.html">Book an Appointment</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-left.html">Frequently Asked Questions</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-left.html">Shipping & Returns</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 column-3">
                                <div class="block block-menu">
                                    <h2 class="block-title">About Us</h2>
                                    <div class="block-content">
                                        <ul>
                                            <li>
                                                <a href="#">About Us</a>
                                            </li>
                                            <li>
                                                <a href="#">FAQ</a>
                                            </li>
                                            <li>
                                                <a href="#">Our Producers</a>
                                            </li>
                                            <li>
                                                <a href="#">Sitemap</a>
                                            </li>
                                            <li>
                                                <a href="#">Terms & Conditions</a>
                                            </li>
                                            <li>
                                                <a href="#">Privacy Policy</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 column-4">
                                <div class="block block-menu">
                                    <h2 class="block-title">Catalog</h2>
                                    <div class="block-content">
                                        <ul>
                                            <li>
                                                <a href="shop-grid-left.html">Earrings</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-left.html">Necklaces</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-left.html">Bracelets</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-left.html">Rings</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-left.html">Jewelry Box</a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-left.html">Studs</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="section-padding">
                <div class="section-container">
                    <div class="block-widget-wrap">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-left">
                                    <p class="copyright">Copyright © 2023. All Right Reserved</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-right">
                                    <div class="block block-image">
                                        <img width="309" height="32" src="media/payments.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
                    <input type="text" autocomplete="off" value="" name="s" class="input-search s"
                        placeholder="Search...">
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
    <script src="libs/popper/js/popper.min.js"></script>
    <script src="libs/jquery/js/jquery.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="libs/slick/js/slick.min.js"></script>
    <script src="libs/mmenu/js/jquery.mmenu.all.min.js"></script>
    <script src="libs/slider/js/tmpl.js"></script>
    <script src="libs/slider/js/jquery.dependClass-0.1.js"></script>
    <script src="libs/slider/js/draggable-0.1.js"></script>
    <script src="libs/slider/js/jquery.slider.js"></script>
    <script src="libs/elevatezoom/js/jquery.elevatezoom.js"></script>

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>
</body>

<!-- Mirrored from caketheme.com/html/mojuri/shop-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Nov 2024 11:03:01 GMT -->

</html>