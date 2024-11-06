<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:29:52 GMT -->

<head>
    <style>
        /* styles.css */
        .news-form-container {
    width: 100%;
    
    padding: 20px;
    background-color: #fff;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    text-align: center;
}

.news-form-container h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

form label {
    display: block;
    margin: 10px 0 5px;
    font-weight: bold;
    color: #555;
}

form input[type="text"],
form input[type="date"],
form input[type="file"],
form select,
form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

form textarea {
    resize: vertical;
}

form button {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

form button:hover {
    background-color: #218838;
}

    </style>
    <meta charset="utf-8" />
    <title>Cap nhat tin tuc</title>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật Tin Tức</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="news-form-container">
        <h2>Cập nhật tin tức</h2>
        <form action="?act=sua-tin-tuc" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?= $Tintuc['id']?>">
            <label for="title">Tiêu Đề</label>
            <input type="text" id="title" name="title" value="<?= $Tintuc['title']?>">
            <span class="text-danger">
                <?= !empty($_SESSION['errors']['title']) ? $_SESSION['errors']['title'] : '' ?>
            </span>

            <label for="content">Mô Tả</label>
            <input type="text" id="content" name="content" value="<?= $Tintuc['content']?>"></input>
            <span class="text-danger">
                <?= !empty($_SESSION['errors']['content']) ? $_SESSION['errors']['content'] : '' ?>
            </span>

            <label for="img">Hình Ảnh</label>
            <input type="text" id="img" name="img" value="<?= $Tintuc['img']?>">

            <label for="date">Ngày Xuất Bản</label>
            <input type="date" id="date" name="date" value="<?= $Tintuc['date']?>" >

            <button type="submit">Sửa Bài Viết</button>
        </form>
    </div>
</body>
</html>

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