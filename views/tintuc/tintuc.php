<?php require_once 'views/layout/header.php'; ?>


<body class="shop">
    <div id="page" class="hfeed page-wrapper">
        <?php require_once 'views/layout/menu.php'; ?>
        <!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$TinTucss['title']?></title>
    <style>
        body {
            background-color: #f8f8f8;
            line-height: 1.6;
            padding-left: 60px;
        }
        .title{
            width: 100%;
        }
        
      

        .image {
            width: 800px;
            height: 800px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .news-detail-title {
            font-size: 32px;
            font-weight: bold;
            color: #333333;
            margin: 10px 0;
        }

        .news-detail-date {
            font-size: 20px;
            color: #888888;
            margin-bottom: 20px;
        }

        .news-detail-content {
            font-size: 25px;
            line-height: 1.6;
            
            color: #555555;
        }

        .news-detail-content p {
            margin-bottom: 15px;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
        }

        .back-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
                                                
                       
                            <h1 class="title"><?=$TinTucs['title'] ?></h1>
                                <hr>
                                    <p class="news-detail-date">Ngày đăng: <?= $TinTucs['date']?></p>
                                        <div class="news-detail-container">     
                                            <div class="news-detail-content">
                                                <p><?= $TinTucs['content'] ?></p>
                                            </div>
                                                 <img src="<?= $TinTucs['img'] ?>" alt="Ảnh tin tức" class="image">
                                         </div>
                    
                                                
    
</body>
</html>
<?php require_once('views/layout/footer.php'); ?>