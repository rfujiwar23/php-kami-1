<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/navigation.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/index.css">
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
<?php
    include "../components/tiktok.php";
    echo createItem();
    ?>
    <div class="wrapper">

    

        <?php
        include "../components/kamiOneNavbar.php";
        echo createHeader();
        ?>
        
        <div class="top">
            <h2>日程・結果</h2>
        </div>

        <div class="schedule-page">
            <div class="container">


                <div class="my-4 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <a onclick="history.back()" class="previous-link"><i class="fa-solid fa-rotate-left"></i> 前に戻る</a>
                    <div class="schedule pt-5 mt-2 mb-5" id="schedule">

                        <div v-for="schedule in schedules">
                        <a v-bind:href="'#rd-'+ schedule.innerLink" style="text-decoration: none;">
                            <div class="col-sm-10 offset-sm-1 round rd-1">
                                <div class="left p-1" v-html="schedule.roundNumberText">
                                    
                                </div>
                                <div class="right" v-html="schedule.roundInfo">
                                </div>
                            </div>
                        </a>
                        <div class="round-info col-10 offset-1">
                        <p v-html="schedule.info"></p>
                        </div>    
                        <div class="arrow" :class="schedule.innerLink">
                            <img src="../assets/image/schedule-down.png" alt="下">
                        </div>
                        </div>
                    </div>
                    <div class="step" id="rd-first">

                        <div class="title">
                            <div class="title-header">
                                <h3 class="text-center">1回戦<br>1次審査</h3>
                            </div>
                            <div class="title-body">
                                <p>(仮）動画を提出</p>
                            </div>
                        </div>
                        
                        <dl class="list_table">
                            <template v-for="list in tableLists1">
                            <dt>{{list.header}}</dt>
                            <dd>{{list.bodyText}}</dd>
                            </template>
                        </dl>

                    </div>
                    <div class="step" id="rd-second">
                        <div class="title">
                            <div class="title-header">
                                <h3 class="text-center">2回戦<br>2次審査</h3>
                            </div>
                            <div class="title-body">
                                <p>(仮）動画を提出</p>
                            </div>
                        </div>
                        <!-- <h3>2回戦・2次審査</h3> -->
                        
                        <dl class="list_table">
                            <template v-for="list in tableLists2">
                            <dt>{{list.header}}</dt>
                            <dd>{{list.bodyText}}</dd>
                            </template>
                        </dl>

                    </div>
                    <div class="step" id="rd-third">
                        <div class="title">
                            <div class="title-header">
                                <h3 class="text-center">決勝戦</h3>
                            </div>
                            <div class="title-body">
                                <p>(仮）動画を提出</p>
                            </div>
                        </div>
                        <!-- <h3>決勝戦</h3> -->
                        <dl class="list_table">
                        <template v-for="list in tableLists3">
                            <dt>{{list.header}}</dt>
                            <dd>{{list.bodyText}}</dd>
                            </template>
                        </dl>

                    </div>
                    <div class="mt-3 text-center">
                        <h2>関連サイトはこちら</h2>
                    </div>
                    <div class="row mb-5">
                        <div class="col-sm-6 offset-sm-3">
                            <div class="p-2">
                                <a href="https://www.kamisma.com"><img src="../assets/image/kamisma.png" alt="KAMISMA" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                    <!-- <a class="btn btn-primary" onclick="history.back()">前のページへ戻る</a> -->
                </div>
            </div>
        </div>
    </div>
    <?php
    include "../components/footer.php";
    echo kamioneFooter();
    ?>

</body>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
<script src="../assets/js/script.js"></script>


</html>