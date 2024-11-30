<header id="site-header" class="site-header header-v1 color-black">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">


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
                                                    <a href="page-my-account.html"><span class="menu-item-text">Tài
                                                            khoản của tôi</span></a>
                                                </li>
                                                <li>
                                               <a href="?act=lien-he"><span class="menu-item-text">Liên hệ</span></a>


                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level-0 menu-item">


                                            <a href="?act=khuyen-mai"><span class="menu-item-text">Khuyến mại</span></a>
                              
                                        </li>
                                    </ul>
                                    <ul>

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
                                <?php if (isset($_SESSION['user'])) { ?>

                                    <a href="/du_an_1/?act=logout"><?php echo $_SESSION['user']['email'] ?></a>
                                <?php } else { ?>
                                    <div class="login-header icon">
                                        <a href="/du_an_1/?act=login"><i class="icon-user"></i></a>
                                    </div>
                                <?php } ?>


                                <!-- Wishlist -->
                                <div class="wishlist-box">
                                    <a href="shop-wishlist.html"><i class="icon-heart"></i></a>
                                    <span class="count-wishlist">1</span>
                                </div>

                                <!-- Cart -->
                                <div class="mojuri-topcart dropdown light">
    <div class="dropdown mini-cart top-cart">
        <div class="remove-cart-shadow"></div>
        
        <!-- Thay đổi liên kết để icon giỏ hàng là một đường dẫn -->
        <a class="cart-icon" href="?act=gio-hang" role="button">
            <div class="icons-cart">
                <i class="icon-large-paper-bag"></i>
            </div>
        </a>
    </div>
</div>


                                <!-- Wishlist -->
                                <div class="wishlist-box">
                                    <a href="?act=form-sua-thong-tin-ca-nhan"><i class="fas fa-key"></i></a>
                                </div>
                            </div>

                            <!-- Wishlist -->
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>