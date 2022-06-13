<?php 

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $content  = $_POST["content"];
  }
  if (isset($_POST['fromhome'])) {
    // Get reCAPTCHA Token
    $recaptcha = htmlspecialchars($_POST['g-recaptcha-response'],ENT_QUOTES,'UTF-8');
    // if(isset($recaptcha)) {
    //   $secret = "6LfQJIAdAAAAAFOE0lkuYgKE6vnReLJXPXHP6nJ_";
    //   $res = @file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&resonse={$recaptcha}");
    //   $result = json_decode($res,true);
    //   var_dump($result);
    //   die();
    //   if(intval($result["success"])!== 1) {
    //     // reCAPTCHA認証エラー reCAPTCHA Authentication Error
    //   }
    // } else {
    //   //reCAPTCHAトークン取得エラー (reCAPTCHA Token )
    // }


    // Get reCAPTCHA Token
    $recaptcha = htmlspecialchars($_POST['g-recaptcha-response'],ENT_QUOTES,'UTF-8');
    
    $secretKey = "6LfrtA4TAAAAAKiRbNSKp-1N9EDtBfv7ERXqfAya";
    $ip = $_SERVER['REMOTE_ADDR'];
    // post request to server
    $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=".$recaptcha."&remoteip=".$_SERVER['REMOTE_ADDR']);

    $result = json_decode($response,true);

    $validRecaptcha = false;

    if($result["success"]) {
      $validRecaptcha = true;
    }

   





	}

	if (isset($_POST["submit"])) {

  	mb_language("ja");
		mb_internal_encoding("UTF-8");
		//

		
    // mb_send_mail("info@invade.co.jp", "お問合せ入りました", $name, $email, $content);

        	$subject = "［自動送信］お問い合わせ内容の確認";

		$body = <<< EOM
{$name}　様

お問い合わせありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。

===================================================
【 お名前 】 
{$name}



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
        

		$fromEmail = "info@invade.co.jp";


		$fromName = "お問い合わせ";

		$header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";

    $headers = "From: " .mb_encode_mimeheader($email);

		mb_send_mail($email, $subject, $body, $header);
    mb_send_mail("info@kami-1.com", "$name 様からお問合せ入りました", $body, $headers);

		header("Location: thanks.php");

   
		exit;
	}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- <link rel="stylesheet" href="../../css/style.css"> -->
  
  <title>株式会社インベード | INVADE Co., Ltd.</title>
  
</head>
<body>
 <div class="contact-wrapper">
    <!-- ======= Header ======= -->
  <!-- ======= Hero Section ======= -->
    <!-- ======= title Section ======= -->
    
      <div class="title-container">
        <h1><span>Contact</span></h1>
      </div>  
    
    
    

  <main id="main">


    <!-- ======= About Section ======= -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title text-center">
          <h2>Confirm Details</h2>
          <h5>内容の確認お願いします</h5>
        </div>

        <div class="row">
          <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-12 col-sm-12">

          </div>



        </div>

        <div class="row">


          <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-12 col-sm-12 contact-us">
            <?php
            if($validRecaptcha){
            ?>
            <form action="confirm.php" method="post">
              <input type="hidden" name="name" value="<?php echo $name; ?>">
              <input type="hidden" name="furigana" value="<?php echo $furigana; ?>">
              <input type="hidden" name="email" value="<?php echo $email; ?>">
              <input type="hidden" name="content" value="<?php echo $content; ?>">
              <input type="hidden" name="tel" value="<?php echo $tel; ?>">
              <h5 class="contact-title">お問い合わせ 内容確認 (Confirm Details)</h5>
              <h6>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する / Send」ボタンを押して下さい。
              </h6>
              <h6>Please confirm your message details.  Click "送信する / Send" to confirm.</h6>
              <div>
                  <div>
                      <label>お名前</label>
                      <p><?php echo $name; ?></p>
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
              <button type="submit" class="btn btn-primary" name="submit">送信する/Send</button>
            </form>
            <?php }
            else {
            ?>
            <div>
              <h6>Please input captcha.</h6>
              <button type="button" class="btn btn-secondary" onclick="history.back(-1)">修正する</button>


            </div>

          <?php }?>
          </div>


        </div>

      </div>
    </section><!-- End Contact Section -->




  <!-- ======= Footer ======= -->
        <section class="footer">
            <div class="container">
              <div class="row">
                <div class="col-sm-4 company-footer text-center">
                  <h5>INVADE Co., Ltd.</h5>
                  <p>TEL: 03-5962-8585
                  <br><strong>email:</strong><a href="info@invade.co.jp">info@invade.co.jp</a></p>
                </div>
                <div class="col-sm-4 text-center">
                  <h5>Services</h5>
                  <ul class="p-0" style="list-style: none;">
                    <li><a href="https://kamismax.kamisma.com" target="_blank">KAMISMAX</a></li>
                    <li><a href="https://beauty.kamisma.com" target="_blank">KAMISMA BEAUTY</a></li>
                    <li><a href="https://beauty.nile.inc" target="_blank">NILE BEAUTY</a></li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  
                </div>
              </div>
              <hr>
              <p class="text-center">Copyright INVADE Co., Ltd. <br class="br_on_500">All Rights Reserved</p>
            </div>
        </section>
  
 </div>

  

</body>

</html>

