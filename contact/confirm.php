<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST["name"];
  $furigana = $_POST["furigana"];
  $email = $_POST["email"];
  $tel = $_POST["tel"];
  $content  = $_POST["content"];
}

if (isset($_POST["submit"])) {

  mb_language("ja");
  mb_internal_encoding("UTF-8");
  //
  mb_send_mail("info@kami-1.com", "お問合せ入りました", $content);


  $subject = "［自動送信］お問い合わせ内容の確認";

  $body = <<< EOM
{$name}　様

お問い合わせありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。

===================================================
【 お名前 】 
{$name}

【 ふりがな 】 
{$furigana}

【 メール 】 
{$email}

【 電話番号 】
{$tel}



【 内容 】 
{$content}
===================================================

内容を確認のうえ、回答させて頂きます。
しばらくお待ちください。
EOM;


  $fromEmail = "invade@invade.co.jp";


  $fromName = "お問い合わせテスト";

  $header = "From: " . mb_encode_mimeheader($fromName) . "<{$fromEmail}>";


  mb_send_mail($email, $subject, $body, $header);

  header("Location: thanks.php");
  exit;
}
?>

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


  <div class="wrapper mb-5">
    <div class="top">
      <h2>記事</h2>
    </div>
    <div id="main" class="my-5">



      <div class="container">


        <div class="row">


          <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-12 col-sm-12 contact-us">
            <form action="confirm.php" method="post">
              <input type="hidden" name="name" value="<?php echo $name; ?>">
              <input type="hidden" name="furigana" value="<?php echo $furigana; ?>">
              <input type="hidden" name="email" value="<?php echo $email; ?>">

              <input type="hidden" name="content" value="<?php echo $content; ?>">
              <h5 class="contact-title">お問い合わせ 内容確認</h5>
              <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
              <div class="contact-form">
                <div class="confirm-block">
                  <label>お名前</label>
                  <p><?php echo $name; ?></p>
                </div>
                <div>
                  <label>ふりがな</label>
                  <p><?php echo $furigana; ?></p>
                </div>
                <div>
                  <label>メールアドレス</label>
                  <p><?php echo $email; ?></p>
                </div>
                <div>
                  <label>電話番号</label>
                  <p><?php echo $tel; ?></p>
                </div>
                <div>
                  <label>お問い合わせ内容</label>
                  <p><?php echo nl2br($content); ?></p>
                </div>
              </div>
              <button type="button" class="btn btn-secondary" onclick="history.back(-1)">修正する</button>
              <button type="submit" class="btn btn-primary" name="submit">送信する</button>
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