<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/navigation.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/movies.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
    <meta name="description" content="KAMI-1グランプリの詳細">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="twitter:title" content="KAMI-1 GRAND PRIX カミワン グランプリ">
    <meta name="twitter:description" content="KAMI-1グランプリの詳細">
    <meta name="keywords" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300;400;500;600;700&family=Noto+Sans+JP:wght@100;500;700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/image/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/image/favicon/favicon-16x16.png">
    <link rel="manifest" href="../assets/image/favicon/site.webmanifest">
</head>
<script>
    $(window).scroll(function() {
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 500);
    });
</script>

<body>
    <div class="wrapper">

        <?php
        include "../components/kamiOneNavbar.php";
        echo createHeader();
        ?>
        <div class="top">
            <h2>記事</h2>
        </div>

        <div class="video-area">
            <div class="container">

                <h3 class="text-center"><span>こういう動画が上がっています！</span></h3>
                <div class="video-area col-lg-8 offset-lg-2 my-5 py-4">
                    <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-10 offset-sm-1">
                        <div class="video-landscape">
                            <video src="../assets/image/video-landscape.mp4" autoplay loop muted></video>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-8 offset-2">
                        <div class="video-portrait">
                            <video src="../assets/image/video-portrait.mp4" autoplay loop muted></video>
                        </div>
                    </div>
                </div>
                <div class="my-4 col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-10 offset-1 back-button">
                    <a class="btn btn-primary" onclick="history.back()">前のページへ戻る</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "../components/footer.php";
    echo kamioneFooter();
    ?>

</body>

</html>