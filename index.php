<?php
include 'head.php'
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/navigation.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title><?php echo $var; ?></title>
    <meta name="description" content="<?php echo $metaDescription ?>">
    <meta name="keywords" content="<?php echo $metaKeywords ?>">
    <meta name="twitter:title" content="<?php echo $var; ?>">
    <meta name="twitter:description" content="<?php echo $metaDescription ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300;400;500;600;700&family=Noto+Sans+JP:wght@100;500;700;900&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/image/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/image/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/image/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/image/favicon/site.webmanifest">
</head>

<body>
    <?php
    include "components/tiktok.php";
    echo createItem();
    ?>
    <div class="wrapper">


        <?php
        include "components/kamiOneNavbar.php";
        echo createHeader();
        ?>
        <div class="inner2">

            <div class="logo-area col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                <div class="contents">
                    <img src="assets/image/main-logo.png" alt="KAMI-1 ????????????" class="img-fluid">
                    <h2 class="text-center">???????????????????????????????????????????????????</h2>
                    <a href="#" class="entry-link">
                        <div class="entry-button my-3">
                            <h3>???????????????</h3>
                            <p><strong>???????????????2022???8???20???</strong></p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div class="main">
        <section class="sect01">
            <div class="container">
                <h1><ruby>KAMI-1<rt>????????????</rt></ruby> ???????????????</h1>
                <h3>??????????????????????????????</h3>
                <h4>????????????<span>200</span>??????</h4>
                <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-10 offset-sm-1">
                    <p class="py-2 px-1" style="line-height: 2em;">
                        ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????2023????????????????????????KAMI-1???????????????????????????????????????<ruby>KAMI-1<rt>????????????</rt></ruby>???????????????
                        <ruby>ZERO<rt>??????</rt></ruby>?????????????????????<br>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????1?????????2??????????????????????????????????????????????????????????????????????????????
                        ????????? ?????????????????????????????????????????????????????????????????????????????????
                    </p>
                </div>
            </div>
        </section>

        <section class="sect02">
            <div class="sect02-news">
                <div class="header">
                    <h3>NEWS</h3>
                    <p>????????????</p>
                </div>
                
                <div id="app">
                    
                     
                      <div class="news-articles" v-for="(article,pIndex) in toBeShown" :key="pIndex">
                        
                        <p>{{article.date}}</p>
                        
                        <h4><a v-bind:href="article.articleLink">{{article.title}}</a></h4>
                        
                        <div class="body">
                            <h6>{{article.body}}</h6>
                        </div>
                    </div>
                      
                    
                    <div class="my-4 text-center">
                        <button class="btn btn-secondary" @click="prevPage" :disabled="currentPage==1">??????</button>
                        <button class="btn btn-primary" @click="nextPage" :disabled="currentPage == totalPages">???????????????</button>
                    </div>
                </div>
            </div>
            <div class="sample-video">
                <div class="header">
                    <h3>SAMPLE MOVIES</h3>
                    <p>??????????????????</p>
                </div>

                <?php
                include "components/videoList.php";
                echo videoList();
                ?>

                <!-- <div class="video-landscape">
                    <video src="assets/image/video-landscape.mp4" autoplay loop muted></video>
                </div>
                <div class="video-portrait">
                    <video src="assets/image/video-portrait.mp4" autoplay loop muted></video>
                </div> -->
                <div class="button-area text-center mt-4">
                    <a class="btn btn-outline-primary" href="movies/index.php">???????????????</a>
                </div>
            </div>
            <div class="sect02-schedule">
                <div class="header">
                    <h3>SCHEDULE</h3>
                    <p>??????????????????</p>
                </div>
                <div class="schedule-item">


                    <div class="item">
                        <div class="round-area">
                            <div class="round red">
                                ?????????
                            </div>
                        </div>
                        <div class="date">
                            <div class="date-p">
                                <p>2022.06.21~08.20</p>
                            </div>
                            <div class="arrow">
                                <a href="schedule/index.html#rd1"><img src="assets/image/arrow.svg" alt="arrow" height="30"></a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="schedule-item">


                    <div class="item">
                        <div class="round-area">
                            <div class="round orange">
                                ?????????
                            </div>
                        </div>
                        <div class="date">
                            <div class="date-p">
                                <p>2022.06.21~08.20</p>
                            </div>
                            <div class="arrow">
                                <a href="schedule/index.html#rd2"><img src="assets/image/arrow.svg" alt="arrow" height="30"></a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="schedule-item">


                    <div class="item">
                        <div class="round-area gold">
                            <div class="round">
                                ?????????
                            </div>
                        </div>
                        <div class="date">
                            <div class="date-p">
                                <p>2022.06.21~08.20</p>
                            </div>
                            <div class="arrow">
                                <a href="schedule/index.html#rd3"><img src="assets/image/arrow.svg" alt="arrow" height="30"></a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </div>

    <?php
    include "components/footer.php";
    echo kamioneFooter();
    ?>


</body>

<script src="assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
<script src="assets/js/article.js"></script>


</html>