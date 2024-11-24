<header id="site-header" class="site-header header-v1 color-black">

    <div class="header-desktop">
        <div class="header-wrapper">
            <div class="section-padding">
                <div class="section-container large p-l-r">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 header-left">
                            <div class="site-logo">
                                <a href="?act=home">
                                    <img width="1000" height="1140" src="media/logo-sliver1.png"
                                        alt="Mojuri – Jewelry Store" />
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center header-center">
                            <div class="site-navigation">
                                <nav id="main-navigation">
                                    <ul id="menu-main-menu" class="menu">
                                        <li class="level-0">
                                            <a href="?act=home"><span class="menu-item-text">Trang chủ</span></a>
                                        <li class="level-0 menu-item menu-item-has-children">
                                            <a href="?act=danhsachsanpham"><span class="menu-item-text">Shop</span></a>
                                            <ul class="sub-menu">
                                                <li class="level-1 menu-item menu-item-has-children">
                                                    <?php foreach ($listDanhMuc as $key => $header): ?>
                                                        <a href="shop-grid-left.html"><span
                                                                class="menu-item-text"><?= $header['ten_danh_muc'] ?></span></a>
                                                    <?php endforeach ?>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- <li class="level-0 menu-item menu-item-has-children mega-menu mega-menu-fullwidth align-center">
                                            <a href="blog-grid-left.html"><span class="menu-item-text">Bài viết</span></a>
                                            <div class="sub-menu">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="menu-section">
                                                            <h2 class="sub-menu-title">Loại blog</h2>
                                                            <ul class="menu-list">
                                                                <li>
                                                                    <a href="blog-grid-left.html"><span class="menu-item-text">Blog Grid - Left Sidebar</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="blog-grid-right.html"><span class="menu-item-text">Blog Grid - Right Sidebar</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="blog-list-left.html"><span class="menu-item-text">Blog List - Left Sidebar</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="blog-list-right.html"><span class="menu-item-text">Blog List - Right Sidebar</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="blog-grid-fullwidth.html"><span class="menu-item-text">Blog Grid - No Sidebar</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="menu-section">
                                                            <h2 class="sub-menu-title">Chi tiết blog</h2>
                                                            <ul class="menu-list">
                                                                <li>
                                                                    <a href="blog-details-left.html"><span class="menu-item-text">Blog Details - Left Sidebar</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="blog-details-right.html"><span class="menu-item-text">Blog Details - Right Sidebar</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="blog-details-fullwidth.html"><span class="menu-item-text">Blog Details - No Sidebar</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="menu-section">
                                                            <h2 class="sub-menu-title">Blog gần đây</h2>
                                                            <div class="block block-posts recent-posts p-t-5">
                                                                <ul class="posts-list">
                                                                    <li class="post-item">
                                                                        <a href="blog-details-right.html" class="post-image">
                                                                            <img src="media/blog/1.jpg">
                                                                        </a>
                                                                        <div class="post-content">
                                                                            <h2 class="post-title">
                                                                                <a href="blog-details-right.html">
                                                                                    Bridial Fair Collections 2023
                                                                                </a>
                                                                            </h2>
                                                                            <div class="post-time">
                                                                                <span class="post-date">May 30, 2022</span>
                                                                                <span class="post-comment">4 Comments</span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="post-item">
                                                                        <a href="blog-details-right.html" class="post-image">
                                                                            <img src="media/blog/2.jpg">
                                                                        </a>
                                                                        <div class="post-content">
                                                                            <h2 class="post-title">
                                                                                <a href="blog-details-right.html">
                                                                                    Our Sterling Silver
                                                                                </a>
                                                                            </h2>
                                                                            <div class="post-time">
                                                                                <span class="post-date">Aug 24, 2022</span>
                                                                                <span class="post-comment">2 Comments</span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="post-item">
                                                                        <a href="blog-details-right.html" class="post-image">
                                                                            <img src="media/blog/3.jpg">
                                                                        </a>
                                                                        <div class="post-content">
                                                                            <h2 class="post-title">
                                                                                <a href="blog-details-right.html">
                                                                                    Kitchen Inspired On Japanese
                                                                                </a>
                                                                            </h2>
                                                                            <div class="post-time">
                                                                                <span class="post-date">Dec 06, 2022</span>
                                                                                <span class="post-comment">1 Comment</span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> -->
                                        <li class="level-0 menu-item menu-item-has-children">
                                            <a href="#"><span class="menu-item-text">Trang</span></a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="page-login.html"><span class="menu-item-text">Đăng nhập /
                                                            Đăng ký</span></a>
                                                </li>
                                                <li>
                                                    <a href="page-forgot-password.html"><span
                                                            class="menu-item-text">Quên mật khẩu</span></a>
                                                </li>
                                                <li>
                                                    <a href="page-my-account.html"><span class="menu-item-text">Tài
                                                            khoản của tôi</span></a>
                                                </li>
                                                <li>
                                                    <a href="page-about.html"><span class="menu-item-text">Về chúng
                                                            tôi</span></a>
                                                </li>
                                                <li>
                                                    <a href="page-contact.html"><span class="menu-item-text">Liên
                                                            hệ</span></a>
                                                </li>
                                                <li>
                                                    <a href="page-faq.html"><span class="menu-item-text">Câu hỏi thường
                                                            gặp</span></a>
                                                </li>
                                                <li>
                                                    <a href="page-404.html"><span class="menu-item-text">Page
                                                            404</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level-0 menu-item">
                                            <a href="page-contact.html"><span class="menu-item-text">Liên hệ</span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 header-right">
                            <div class="header-page-link">
                                <!-- Search -->
                                <div class="search-box">
                                    <div class="search-toggle"><i class="icon-search"></i></div>
                                </div>

                                <!-- Login -->
                                <div class="login-header icon">
                                    <a class="active-login" href="#"><i class="icon-user"></i></a>
                                    <div class="form-login-register">
                                        <div class="box-form-login">
                                            <div class="active-login"></div>
                                            <div class="box-content">
                                                <div class="form-login active">
                                                    <form action="?act=check-login-admin" id="login_ajax" method="post"
                                                        class="login">
                                                        <h2>Sign in</h2>
                                                        <p class="status"></p>
                                                        <div class="content">
                                                            <div class="username">
                                                                <input type="text" required="required"
                                                                    class="input-text" name="email" id="username"
                                                                    placeholder="Your name" />
                                                            </div>
                                                            <div class="password">
                                                                <input class="input-text" required="required"
                                                                    type="password" name="password" id="password"
                                                                    placeholder="Password" />
                                                            </div>
                                                            <div class="rememberme-lost">
                                                                <div class="rememberme">
                                                                    <input name="rememberme" type="checkbox"
                                                                        id="rememberme" value="forever" />
                                                                    <label for="rememberme" class="inline">Remember
                                                                        me</label>
                                                                </div>
                                                                <div class="lost_password">
                                                                    <a href="forgot-password.html">Lost your
                                                                        password?</a>
                                                                </div>
                                                            </div>
                                                            <div class="button-login">
                                                                <input type="submit" class="button" name="login"
                                                                    value="Login" />
                                                            </div>
                                                            <div class="button-next-reregister">Create An Account</div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="form-register">
                                                    <form method="post" class="register">
                                                        <h2>REGISTER</h2>
                                                        <div class="content">
                                                            <div class="email">
                                                                <input type="email" class="input-text"
                                                                    placeholder="Email" name="email" id="reg_email"
                                                                    value="" />
                                                            </div>
                                                            <div class="password">
                                                                <input type="password" class="input-text"
                                                                    placeholder="Password" name="password"
                                                                    id="reg_password" />
                                                            </div>
                                                            <div class="button-register">
                                                                <input type="submit" class="button" name="register"
                                                                    value="Register" />
                                                            </div>
                                                            <div class="button-next-login">Already has an account</div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Wishlist -->
                                <div class="wishlist-box">
                                    <a href="shop-wishlist.html"><i class="icon-heart"></i></a>
                                    <span class="count-wishlist">1</span>
                                </div>

                                <!-- Cart -->
                                <div class="mojuri-topcart dropdown light">
                                    <div class="dropdown mini-cart top-cart">
                                        <div class="remove-cart-shadow"></div>
                                        <a class="dropdown-toggle cart-icon" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="icons-cart"><i class="icon-large-paper-bag"></i><span
                                                    class="cart-count">2</span></div>
                                        </a>
                                        <div class="dropdown-menu cart-popup">
                                            <div class="cart-empty-wrap">
                                                <ul class="cart-list">
                                                    <li class="empty">
                                                        <span>No products in the cart.</span>
                                                        <a class="go-shop" href="shop-grid-left.html">GO TO SHOP<i
                                                                aria-hidden="true" class="arrow_right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="cart-list-wrap">
                                                <ul class="cart-list ">
                                                    <li class="mini-cart-item">
                                                        <a href="#" class="remove" title="Remove this item"><i
                                                                class="icon_close"></i></a>
                                                        <a href="shop-details.html" class="product-image"><img
                                                                width="600" height="600" src="media/product/3.jpg"
                                                                alt=""></a>
                                                        <a href="shop-details.html" class="product-name">Twin Hoops</a>
                                                        <div class="quantity">Qty: 1</div>
                                                        <div class="price">$150.00</div>
                                                    </li>
                                                    <li class="mini-cart-item">
                                                        <a href="#" class="remove" title="Remove this item"><i
                                                                class="icon_close"></i></a>
                                                        <a href="shop-details.html" class="product-image"><img
                                                                width="600" height="600" src="media/product/1.jpg"
                                                                alt=""></a>
                                                        <a href="shop-details.html" class="product-name">Medium Flat
                                                            Hoops</a>
                                                        <div class="quantity">Qty: 1</div>
                                                        <div class="price">$100.00</div>
                                                    </li>
                                                </ul>
                                                <div class="total-cart">
                                                    <div class="title-total">Total: </div>
                                                    <div class="total-price"><span>$250.00</span></div>
                                                </div>
                                                <div class="free-ship">
                                                    <div class="title-ship">Buy <strong>$400</strong> more to enjoy
                                                        <strong>FREE Shipping</strong></div>
                                                    <div class="total-percent">
                                                        <div class="percent" style="width:20%"></div>
                                                    </div>
                                                </div>
                                                <div class="buttons">
                                                    <a href="shop-cart.html"
                                                        class="button btn view-cart btn-primary">View cart</a>
                                                    <a href="shop-checkout.html"
                                                        class="button btn checkout btn-default">Check out</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Wishlist -->
                                <div class="wishlist-box">
                                    <a href="?act=form-sua-thong-tin-ca-nhan">Đổi mật khẩu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>