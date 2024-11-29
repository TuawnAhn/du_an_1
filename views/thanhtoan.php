<?php require_once 'views/layout/header.php'; ?>

<body class="shop">
    <div id="page" class="hfeed page-wrapper">
        <?php require_once 'views/layout/menu.php'; ?>
        <style>
/* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

.cart-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    background-color: white;
}

/* Header Section */
.cart-header {
    flex: 1 1 60%;
}

.cart-header p {
    margin: 5px 0;
    color: #333;
}

.cart-header h1 {
    font-size: 24px;
    color: #000;
    margin: 10px 0;
}

.cart-total {
    font-size: 18px;
    font-weight: bold;
    margin-top: 15px;
}

.cart-note {
    font-size: 14px;
    color: #666;
}

/* Promotion Section */
.promotion {
    flex: 1 1 100%;
    padding: 15px;
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    margin-bottom: 20px;
}

.promotion p {
    margin: 5px 0;
}

.promotion a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}

/* Cart Item Section */
.cart-item {
    flex: 1 1 60%;
    display: flex;
    gap: 20px;
    padding: 15px;
    border: 1px solid #ddd;
    background-color: #fff;
}

.cart-item img {
    width: 100px;
    height: 100px;
    object-fit: cover;
}

.item-details {
    flex: 1;
}

.item-name {
    font-size: 16px;
    font-weight: bold;
}

.item-info {
    font-size: 14px;
    color: #666;
}

.item-controls {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.item-price {
    color: #e74c3c;
    font-size: 16px;
    font-weight: bold;
}

.remove-btn {
    background-color: #e74c3c;
    color: white;
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    font-size: 16px;
    cursor: pointer;
}

/* Summary Section */
.summary {
    flex: 1 1 35%;
    border: 1px solid #ddd;
    padding: 15px;
    background-color: #fff;
}

.summary h2 {
    font-size: 18px;
    margin-bottom: 20px;
}

.summary p {
    font-size: 14px;
    margin: 5px 0;
}

.summary-total {
    font-size: 18px;
    color: #000;
    margin-top: 20px;
}

.checkout-btn {
    width: 100%;
    padding: 10px;
    background-color: black;
    color: white;
    border: none;
    font-size: 16px;
    cursor: pointer;
}

.checkout-btn:hover {
    background-color: #333;
}

        </style>

<body>
    <div class="cart-container">
        <div class="cart-header">
            <p>XIN CHÀO THANH HÀ</p>
            <h1>GIỎ HÀNG CỦA BẠN</h1>
            <p class="cart-total">TỔNG CỘNG (1 sản phẩm) <strong>2.160.000₫</strong></p>
            <p class="cart-note">Các mặt hàng trong giỏ hàng của bạn không được bảo lưu — hãy kiểm tra ngay để đặt hàng.</p>
        </div>

        <div class="promotion">
            <p><strong>🔥 BLACK FRIDAY 🔥</strong></p>
            <p>Ưu đãi đến 50%, diễn ra ở online và cửa hàng adidas từ 22/11 đến 01/12/2024. Điều khoản & điều kiện*</p>
            <a href="#">THÊM SẢN PHẨM</a>
        </div>

        <div class="cart-item">
            <img src="https://via.placeholder.com/100" alt="Giày">
            <div class="item-details">
                <p class="item-name">GIÀY SAMBA OG</p>
                <p class="item-info">CLOUD WHITE / HALO BLUE / OFF WHITE</p>
                <p>KÍCH CỠ: 4 UK</p>
                <div class="item-controls">
                    <select>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <p class="item-price"><s>2.700.000₫</s> <strong>2.160.000₫</strong></p>
                </div>
            </div>
            <button class="remove-btn">X</button>
        </div>

        <div class="summary">
            <h2>TÓM TẮT ĐƠN HÀNG</h2>
            <p>1 sản phẩm</p>
            <p>Giá gốc: 2.700.000₫</p>
            <p>Giao hàng: Miễn phí</p>
            <p>On Sale: -540.000₫</p>
            <p class="summary-total"><strong>Tổng: 2.160.000₫</strong></p>
            <button class="checkout-btn">THANH TOÁN</button>
        </div>
    </div>
</body>









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
                                                    <span>Email:</span> <a href="mailto:support@mojuri.com">support@mojuri.com</a>
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