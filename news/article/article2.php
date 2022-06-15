<?php
include '../../head.php'
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/navigation.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $var; ?></title>
    <meta name="description" content="<?php echo $metaDescription ?>">
    <meta name="keywords" content="<?php echo $metaKeywords ?>">
    <meta name="twitter:title" content="<?php echo $var; ?>">
    <meta name="twitter:description" content="<?php echo $metaDescription ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300;400;500;600;700&family=Noto+Sans+JP:wght@100;500;700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/image/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/image/favicon/favicon-16x16.png">
    <link rel="manifest" href="../../assets/image/favicon/site.webmanifest">
</head>

<body>
    <div class="wrapper">
        <?php
        include "../../components/kamiOneNavbar.php";
        echo createHeader();
        ?>

        <div class="top">
            <h2>記事</h2>
        </div>

        <div class="main-article">
            <div class="container">


                <div class="my-4 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <a onclick="history.back()" class="previous-link"><i class="fa-solid fa-rotate-left"></i> 前に戻る</a>
                    <div class="articles pt-5 px-3 mt-2 mb-5" id="article2">
                        <h5 class="title">
                            {{title}}
                        </h5>
                        <h6>
                            <i class="fa-solid fa-calendar-days"></i>{{date}}
                        </h6>
                        <p>

                            {{body}}
                        </p>

                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-8 offset-sm-2">
                            <img src="https://via.placeholder.com/600x400/45579e/969696.png?text=Insert+Image" alt="" class="img-fluid">
                        </div>
                        <div class="prev_and_next mt-3">
                            <div class="left">
                                <a href="article1.php"><i class="fa-solid fa-caret-left"></i></a>
                            </div>
                            <div class="right">
                                <a href="article3.php"><i class="fa-solid fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- <a class="btn btn-primary" onclick="history.back()">前のページへ戻る</a> -->
                </div>
            </div>
        </div>
    </div>
    <?php
    include "../../components/footer.php";
    echo kamioneFooter();
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
<script src="../../assets/js/article_no2.js"></script>

</html>