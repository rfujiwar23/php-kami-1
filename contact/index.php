<!DOCTYPE html>
<html lang="ja">

<head>
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

</head>

<body>

  <?php
  include "../components/kamiOneNavbarContact.php";
  echo createContactHeader();
  ?>

  <div class="wrapper">
  <div class="top">
            <h2>記事</h2>
        </div>
    <div id="main" class="my-5">


      <div class="container">


        <div class="row">

          <!-- <a href="http://invade.co.jp/script/mailform/contact/">お問い合わせフォーム</a> -->
          <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-12 col-sm-12 contact-us">

            <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
              <div class="contact-form">
                <div class="block">
                  <label>お名前<span>※</span></label>
                  <input type="text" name="name" placeholder="山田太郎" value="">
                </div>
                <div class="block">
                  <label>ふりがな<span>※</span></label>
                  <input type="text" name="furigana" placeholder="やまだたろう" value="">
                </div>
                <div class="block">
                  <label>メールアドレス<span>※</span></label>
                  <input type="text" name="email" placeholder="info@invade.co.jp" value="">
                </div>
                <div class="block">
                  <label>電話番号</label>
                  <input type="text" name="tel" placeholder="0000000000" value="">
                </div>
                <div class="block">
                  <label>内容<span>※</span></label>
                  <textarea name="content" rows="5" placeholder="お問合せ内容を入力"></textarea>
                </div>

                <h6><span>※</span>は必須</h6>
              </div>

              

              <div class="info-box col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-10 offset-md-1 my-4">
                <h2><span>お問い合わせに関する注意事項</span></h2>
                <ul>
                  <li>ご記入いただいた個人情報は、お問い合わせへの回答、情報提供のために使用させていただきます。</li>
                  <li>個人情報を正しくご記入いただけない場合やお問い合わせ内容によっては、回答できない場合がございます。</li>
                  <li>お問い合わせ内容によっては、回答にお時間をいただく場合がございます。</li>
                  <li>回答はお客様個人宛に送るものですので、転載・転送等の二次利用は固くお断りいたします。</li>
                </ul>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">確認画面へ</button>
              </div>


            </form>
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