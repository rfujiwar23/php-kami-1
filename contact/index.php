<?
include '../head.php';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/image/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/image/favicon/favicon-16x16.png">
  <link rel="manifest" href="../assets/image/favicon/site.webmanifest">
</head>

<body>
  <div class="wrapper">
    <?php
    include "../components/kamiOneNavbar.php";
    echo createHeader();
    ?>

    <div class="top">
      <h2>お問い合わせ</h2>
    </div>

    <div class="main-article">
      <div class="container">


        <div class="my-4 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
          <a onclick="history.back()" class="previous-link"><i class="fa-solid fa-rotate-left"></i> 前に戻る</a>

          <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
            <div class="contact-form col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">
              <div class="block">
                <label>NAME<span>※</span></label>
                <input type="text" name="name" placeholder="カミ一郎" value="">
              </div>
              <!-- <div class="block">
                                  <label>ふりがな<span>※</span></label>
                                  <input type="text" name="furigana" placeholder="やまだたろう" value="">
                                  </div> -->
              <div class="block">
                <label>EMAIL<span>※</span></label>
                <input type="text" name="email" placeholder="xxxx@kami-1.com" value="">
              </div>
              <div class="block">
                <label>TEL</label>
                <input type="text" name="tel" placeholder="0000000000" value="">
              </div>
              <div class="block">
                <label>MESSAGE<span>※</span></label>
                <textarea name="content" rows="5" placeholder="お問合せ内容"></textarea>
              </div>
              <h6><span>※</span>は必須</h6>
            </div>
            <div class="info-box col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2 my-4">
              <h2><span>お問い合わせに関する注意事項</span></h2>
              <ul>
                <li>ご記入いただいた個人情報は、お問い合わせへの回答、情報提供のために使用させていただきます。</li>
                <li>個人情報を正しくご記入いただけない場合やお問い合わせ内容によっては、回答できない場合がございます。</li>
                <li>お問い合わせ内容によっては、回答にお時間をいただく場合がございます。</li>
                <li>回答はお客様個人宛に送るものですので、転載・転送等の二次利用は固くお断りいたします。</li>
              </ul>
            </div>
            <div class="authenticate col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2 my-3" style="display: flex; align-items:center; justify-content:center;">
              <div class="g-recaptcha" data-sitekey="6Leo0GogAAAAAOcodxzwHcX9KTAmqlIhBDSNw7M2"></div>
              <!-- <div class="g-recaptcha" data-sitekey="6LeQtI4dAAAAABCo4A6G0umz-SMayuTgxnwf3kmw"></div> -->
            </div>
            <div class="text-center">
              <input type="hidden" name="fromhome" value="1">
              <button type="submit" class="btn btn-primary">確認画面へ進む</button>
            </div>
          </form>

          <!-- <a class="btn btn-primary" onclick="history.back()">前のページへ戻る</a> -->
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
      <ul>
        <li><a href="#">プライバシー・ポリシー</a></li>
        <li><a href="#">利用規約</a></li>
        <li><a href="#">お問い合わせ</a></li>
      </ul>

      <h5>KAMI-1 グランプリ</h5>
      <p><a href="mailto:info@kami-1.com">info@kami-1.com</a></p>
      <p><img src="../assets/image/mini-logo.png" alt="KAMI-1" height="80"></p>
    </div>
  </footer>
</body>

</html>