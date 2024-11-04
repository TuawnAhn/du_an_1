<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:29:52 GMT -->

<head>
    <style>
        /* styles.css */


.form-container {
    background-color: #fff;
    padding: 20px;
   
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.form-container h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

label {
    display: block;
    margin-top: 15px;
    color: #555;
}

input[type="text"],
input[type="date"],
textarea,
select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    color: #333;
}

textarea {
    resize: vertical;
}

input[type="file"] {
    margin-top: 5px;
    font-size: 16px;
}

button {
    width: 100%;
    padding: 12px;
    margin-top: 20px;
    border: none;
    background-color: #28a745;
    color: #fff;
    font-size: 18px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #218838;
}
/* styles.css */



.news-list-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.news-list-container h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.news-item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 20px;
}

.news-item img {
    width: 150px;
    height: 100px;
    border-radius: 8px;
    margin-right: 20px;
}

.news-content {
    flex: 1;
}

.news-actions {
    display: flex;
    gap: 10px;
    align-items: center;
    margin-left: 100px; /* Khoảng cách giữa nút Sửa/Xóa và nội dung tin tức */
}

.news-actions button {
    padding: 8px 12px;
    font-size: 14px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
    color: #fff;
}

.btn-edit {
    background-color: #ffc107;
}

.btn-edit:hover {
    background-color: #e0a800;
}

.btn-delete {
    background-color: #dc3545;
}

.btn-delete:hover {
    background-color: #c82333;
}


    </style>
    <meta charset="utf-8" />
    <title>Danh mục tin tức</title>
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

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col">
                        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Submission Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="news-list-container">
    <h2>Tin Tức</h2>
    <div class="row g-3 mb-0 align-items-center">
    <div class="text-end">
                 <a href="?act=form-them-tin-tuc" type="button" class="btn btn-soft-success material-shadow-none"><i class="ri-add-circle-line align-middle me-1"></i> Thêm tin tức</a>
                </div>
                                                   
                 <br>
                <br>
                                                       
                </div>
    <?php foreach($TinTucs as $index => $TinTuc) : ?>

        <!-- Bắt đầu danh sách tin tức -->
        <div class="news-item">
            <img src="image1.jpg" alt="News Image 1">
            <div class="news-content">
                <h3>  <?=$TinTuc['title'] ?></h3>
                <p class="news-date"><?=$TinTuc['date'] ?></p>
                <p class="news-description"><?=$TinTuc['content'] ?></p>
            </div>
            <div class="news-actions">
            <button onclick="window.location.href='?act=form-sua-tin-tuc&tin_tuc_id=<?= $TinTuc['id'] ?>'" 
            type="submit" class="btn-edit">Sửa</button>
                
                    <form action="?act=xoa-tin-tuc" method="POST"
                    onsubmit="return confirm('Ban co dong y xoa ko?')">
                    <input type="hidden" name="tin_tuc_id" value="<?= $TinTuc['id']?>">
                    <button type="submit" class="btn-delete">Xóa</button>
                    </form>
            </div>
        </div>
        <?php endforeach; ?>
        <!-- Bạn có thể thêm nhiều .news-item tương tự như trên cho các bài viết khác -->
    </div>
</body>
</html>

          
           
    </div>
    
</body>
</html>


                            <div class="h-100">
                               
                                
                                </div> <!-- end row-->

                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
   

  

    <!-- JAVASCRIPT -->
    <?php
    require_once "views/layouts/libs_js.php";
    ?>

</body>

</html>