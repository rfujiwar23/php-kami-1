<!DOCTYPE html>

<head>
  <html lang="ja">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/navigation.css">
  <link rel="stylesheet" href="../assets/css/navbar.css">
  <link rel="stylesheet" href="../assets/css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>KAMI-1 GRAND PRIX カミワン グランプリ</title>
  <meta name="keywords" content="">
  <meta name="description" content="KAMI-1グランプリの詳細">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="twitter:title" content="KAMI-1 GRAND PRIX カミワン グランプリ">
  <meta name="twitter:description" content="KAMI-1グランプリの詳細">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300;400;500;600;700&family=Noto+Sans+JP:wght@100;500;700;900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/image/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/image/favicon/favicon-16x16.png">
  <link rel="manifest" href="../assets/image/favicon/site.webmanifest">
</head>

<body>

  <div class="wrapper">

    <?php
    include "../components/kamiOneNavbarContact.php";
    echo createContactHeader();
    ?>


    <div class="top">
      <h2>お問い合わせ</h2>
    </div>


    <div id="main" class="my-5">
      <div class="container">

        <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-12 col-sm-12 contact-us">
          <div>
            <div>
              <h4 class="text-center mb-5">お問い合わせ 送信完了</h4>
              <!-- <h5>Message Sent</h5> -->
              <p class="text-center">
                お問い合わせありがとうございました。<br>
                内容を確認のうえ、回答させて頂きます。<br>
                しばらくお待ちください。
              </p>

              <div class="text-center mt-5">
                <a href="index.php" class="text-center">
                  <button type="button" class="btn btn-primary">トップへ戻る</button>
                </a>
              </div>
            </div>
          </div>
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