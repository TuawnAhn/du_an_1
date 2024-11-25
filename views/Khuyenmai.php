<?php
require_once('views/layout/header.php'); ?>

<body class="home">
    <div id="page" class="hfeed page-wrapper">
        <?php require_once('views/layout/menu.php'); ?>
        <br><br>
        <h2 style="text-align:center">Khuyến Mãi, Ưu Đãi HOT Nhất Tại Silver Ring</h2>

<h3 style="text-align:center">Ưu đãi tháng 11</h3><br>
<div class="container">
    <div class="row">
        <?php foreach($danhSachKhuyenMai as $KhuyenMaiItem) { ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4"> <!-- 3 cards in a row -->
                <div class="card text-center shadow position-relative" style="height: 250px; border: 1px solid #ccc;">
                    <p class="card-img-top mx-auto mt-3">Silver Ring</p>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title"><?= $KhuyenMaiItem['ten_khuyen_mai'] ?></h5>
                        <p class="card-text text-muted">Hạn sử dụng: <?= $KhuyenMaiItem['ngay_ket_thuc'] ?></p>
                        <!-- Hidden promo code -->
                        <span class="d-none" id="promo-code-<?= $KhuyenMaiItem['ma_khuyen_mai'] ?>"><?= $KhuyenMaiItem['ma_khuyen_mai'] ?></span>
                    </div>
                    <!-- Copy button positioned at the top right -->
                    <button class="btn btn-success btn-sm position-absolute top-0 end-0 m-2" onclick="copyCode('<?= $KhuyenMaiItem['ma_khuyen_mai'] ?>')">Sao chép mã</button>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<br>
<style>
   .card {
    transition: transform 0.2s, box-shadow 0.2s; /* Smooth transition for hover effects */
    border-radius: 5px; /* Rounded corners */
}

.card:hover {
    transform: translateY(-5px); /* Lift effect on hover */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Shadow effect on hover */
}

.card-img-top {
    font-size: 1.5rem; /* Adjust font size for the image title */
    font-weight: bold; /* Make the title bold */
    color: #333; /* Dark color for better contrast */
}

.card-title {
    font-size: 1.25rem; /* Adjust the title size */
    color: #007bff; /* Bootstrap primary color */
}

.card-text {
    font-size: 0.9rem; /* Slightly smaller font for text */
}

.btn-success {
    background-color: #28a745; /* Bootstrap success color */
    border: none; /* Remove default border */
}

.btn-success:hover {
    background-color: #218838; /* Darker green on hover */
}

.bg-light {
    background-color: #f8f9fa; /* Light background for contrast */
}
</style>
<script>
function copyCode(code) {
    // Create a temporary input element
    const tempInput = document.createElement('input');
    tempInput.value = code;

    // Append to the body
    document.body.appendChild(tempInput);

    // Select the text
    tempInput.select();
    tempInput.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text to clipboard
    document.execCommand('copy');

    // Remove the temporary input element
    document.body.removeChild(tempInput);

    // Optional: Notify the user
    alert('Đã sao chép mã: ' + code);
}
</script>
</div>
        
                        <section class="section section-padding m-b-70">
                            <div class="section-container large">
                                <!-- Block Banners (Layout 1) -->
                                <div class="block block-banners layout-1 banners-effect">
                                    <div class="block-widget-wrap small-space">
                                        <div class="row">
                                            <div class="section-column left sm-m-b">
                                                <div class="block-widget-banner">
                                                    <div class="bg-banner">
                                                        <div class="banner-wrapper banners">
                                                            <div class="banner-image">
                                                                <a href="shop-grid-left.html">
                                                                    <img width="630" height="457" src="media/banner/banner-1-1.jpg" alt="Banner Image">
                                                                </a>
                                                            </div>
                                                            <div class="banner-wrapper-infor">
                                                                <div class="info">
                                                                    <div class="content">
                                                                        <h3 class="title-banner">Sản phẩm mới</h3>
                                                                        <a class="button" href="shop-grid-left.html">Mua ngay</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="section-column center sm-m-b">
                                                <div class="block-widget-banner">
                                                    <div class="bg-banner">
                                                        <div class="banner-wrapper banners">
                                                            <div class="banner-image">
                                                                <a href="shop-grid-left.html">
                                                                    <img width="450" height="457" src="media/banner/banner-1-2.jpg" alt="Banner Image">
                                                                </a>
                                                            </div>
                                                            <div class="banner-wrapper-infor text-center">
                                                                <div class="info">
                                                                    <div class="content">
                                                                        <h3 class="title-banner">Bán chạy nhất</h3>
                                                                        <a class="button center" href="shop-grid-left.html">Mua ngay</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="section-column right">
                                                <div class="block-widget-banner">
                                                    <div class="bg-banner">
                                                        <div class="banner-wrapper banners">
                                                            <div class="banner-image">
                                                                <a href="shop-grid-left.html">
                                                                    <img width="630" height="457" src="media/banner/banner-1-3.jpg" alt="Banner Image">
                                                                </a>
                                                            </div>
                                                            <div class="banner-wrapper-infor">
                                                                <div class="info">
                                                                    <div class="content">
                                                                        <h3 class="title-banner">Xả kho</h3>
                                                                        <a class="button" href="shop-grid-left.html">Mua ngay</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

            

                        <section class="section section-padding">
                            <div class="section-container large">
                                <!-- Block Banners (Layout 2) -->
                                <div class="block block-banners layout-2 banners-effect">
                                    <div class="block-widget-wrap">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="block-widget-banner m-b-15">
                                                    <div class="bg-banner">
                                                        <div class="banner-wrapper banners">
                                                            <div class="banner-image">
                                                                <a href="shop-grid-left.html">
                                                                    <img width="856" height="496" src="media/banner/banner-1-4.jpg" alt="Banner Image">
                                                                </a>
                                                            </div>
                                                            <div class="banner-wrapper-infor">
                                                                <div class="info">
                                                                    <div class="content">
                                                                        <h3 class="title-banner">Bộ sưu tập mùa hè</h3>
                                                                        <div class="banner-image-description">
                                                                            Vòng cổ và bông tai ngọc trai nước ngọt
                                                                        </div>
                                                                        <a class="button button-outline thick-border border-white button-arrow" href="shop-grid-left.html">Khám phá</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="block-widget-banner">
                                                    <div class="bg-banner">
                                                        <div class="banner-wrapper banners">
                                                            <div class="banner-image">
                                                                <a href="shop-grid-left.html">
                                                                    <img width="856" height="496" src="media/banner/banner-1-5.jpg" alt="Banner Image">
                                                                </a>
                                                            </div>
                                                            <div class="banner-wrapper-infor">
                                                                <div class="info">
                                                                    <div class="content">
                                                                        <h3 class="title-banner"> Làm cho nó đáng nhớ</h3>
                                                                        <div class="banner-image-description">
                                                                            Vòng cổ và bông tai ngọc trai nước ngọt
                                                                        </div>
                                                                        <a class="button button-outline thick-border border-white button-arrow" href="shop-grid-left.html">Khám phá</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section section-padding background-img bg-img-2 m-b-70 p-t-140 p-b-70 m-t-n-130">
                            <div class="section-container">
                                <!-- Block Testimonial -->
                                <div class="block block-testimonial layout-2">
                                    <div class="block-widget-wrap">
                                        <div class="block-title">
                                            <h2>Khách hàng của chúng tôi nói gì</h2>
                                        </div>
                                        <div class="block-content">
                                            <div class="testimonial-wrap slick-wrap">
                                                <div class="slick-sliders" data-slidestoscroll="true" data-slidestoscroll="true" data-nav="1" data-dots="0" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="2" data-columns="3">
                                                    <div class="testimonial-content">
                                                        <div class="item">
                                                            <div class="testimonial-item">
                                                                <div class="testimonial-icon">
                                                                    <div class="rating">
                                                                        <div class="star star-5"></div>
                                                                    </div>
                                                                </div>
                                                                <h2 class="testimonial-title">“Những bình luận tuyệt vời”</h2>
                                                                <div class="testimonial-excerpt">
                                                                    Trang web có thiết kế tinh tế, phù hợp với sản phẩm nhẫn. </div>
                                                            </div>
                                                            <div class="testimonial-image image-position-top">
                                                                <div class="thumbnail">
                                                                    <img width="110" height="110" src="media/testimonial/5.jpg" alt="">
                                                                </div>
                                                                <div class="testimonial-info">
                                                                    <h2 class="testimonial-customer-name">Đàm Đức Thịnh</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-content">
                                                        <div class="item">
                                                            <div class="testimonial-item">
                                                                <div class="testimonial-icon">
                                                                    <div class="rating">
                                                                        <div class="star star-4"></div>
                                                                    </div>
                                                                </div>
                                                                <h2 class="testimonial-title">“Hình ảnh chất lượng”</h2>
                                                                <div class="testimonial-excerpt">
                                                                    Nhẫn được trình bày với hình ảnh rõ nét, hấp dẫn. </div>
                                                            </div>
                                                            <div class="testimonial-image image-position-top">
                                                                <div class="thumbnail">
                                                                    <img width="110" height="110" src="media/testimonial/6.jpg" alt="">
                                                                </div>
                                                                <div class="testimonial-info">
                                                                    <h2 class="testimonial-customer-name">Nguyễn Tuấn Anh</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-content">
                                                        <div class="item">
                                                            <div class="testimonial-item">
                                                                <div class="testimonial-icon">
                                                                    <div class="rating">
                                                                        <div class="star star-5"></div>
                                                                    </div>
                                                                </div>
                                                                <h2 class="testimonial-title">“Chính sách minh bạch1”</h2>
                                                                <div class="testimonial-excerpt">
                                                                    Chính sách đổi trả và bảo hành rõ ràng, tạo sự tin tưởng. </div>
                                                            </div>
                                                            <div class="testimonial-image image-position-top">
                                                                <div class="thumbnail">
                                                                    <img width="110" height="110" src="media/testimonial/7.jpg" alt="">
                                                                </div>
                                                                <div class="testimonial-info">
                                                                    <h2 class="testimonial-customer-name">Đặng Thanh Hà</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-content">
                                                        <div class="item">
                                                            <div class="testimonial-item">
                                                                <div class="testimonial-icon">
                                                                    <div class="rating">
                                                                        <div class="star star-5"></div>
                                                                    </div>
                                                                </div>
                                                                <h2 class="testimonial-title">“Stunning Design”</h2>
                                                                <div class="testimonial-excerpt">
                                                                    Blood bank canine teeth larynx occupational therapist oncologist optician plaque spinal tap stat strep...
                                                                </div>
                                                            </div>
                                                            <div class="testimonial-image image-position-top">
                                                                <div class="thumbnail">
                                                                    <img width="110" height="110" src="media/testimonial/4.jpg" alt="">
                                                                </div>
                                                                <div class="testimonial-info">
                                                                    <h2 class="testimonial-customer-name">Shetty Jamie</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section section-padding m-b-80">
                            <div class="section-container">
                                <!-- Block Newsletter (Layout 2) -->
                                <div class="block block-newsletter layout-2 one-col">
                                    <div class="block-widget-wrap">
                                        <div class="newsletter-title-wrap">
                                            <h2 class="newsletter-title">Tin Mới Nhất Từ Sliver Ring!</h2>
                                            <div class="newsletter-text">Đăng ký để được giảm giá 10% cho lần mua hàng tiếp theo của bạn.</div>
                                        </div>
                                        <form action="#" method="post" class="newsletter-form">
                                            <input type="email" name="your-email" value="" size="40" placeholder="Nhập vào địa chỉ Email">
                                            <span class="btn-submit">
                                                <input type="submit" value="ĐĂNG KÝ">
                                            </span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                       
                        <section class="section section-padding top-border p-t-10 p-b-10 m-b-0">
                            <div class="section-container">
                                <!-- Block Image -->
                                <div class="block block-image slider">
                                    <div class="block-widget-wrap">
                                        <div class="slick-wrap">
                                            <div class="slick-sliders" data-nav="0" data-columns4="1" data-columns3="2" data-columns2="3" data-columns1="4" data-columns1440="4" data-columns="5">
                                                <div class="item slick-slide">
                                                    <div class="item-image animation-horizontal">
                                                        <a href="#">
                                                            <img width="450" height="450" src="media/brand/1.jpg" alt="Brand 1">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item slick-slide">
                                                    <div class="item-image animation-horizontal">
                                                        <a href="#">
                                                            <img width="450" height="450" src="media/brand/2.jpg" alt="Brand 2">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item slick-slide">
                                                    <div class="item-image animation-horizontal">
                                                        <a href="#">
                                                            <img width="450" height="450" src="media/brand/3.jpg" alt="Brand 3">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item slick-slide">
                                                    <div class="item-image animation-horizontal">
                                                        <a href="#">
                                                            <img width="450" height="450" src="media/brand/4.jpg" alt="Brand 4">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item slick-slide">
                                                    <div class="item-image animation-horizontal">
                                                        <a href="#">
                                                            <img width="450" height="450" src="media/brand/5.jpg" alt="Brand 5">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- #content -->
                </div><!-- #primary -->
            </div><!-- #main-content -->
        </div>

        <?php require_once('views/layout/footer.php'); ?>