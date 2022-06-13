<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- <link rel="stylesheet" href="../../css/style.css"> -->
  <link rel="stylesheet" href="assets/css/contact.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://use.fontawesome.com/5c2738e24d.js"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script src="js/main.js"></script>

  <link rel="apple-touch-icon" sizes="180x180" href="../../image/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../image/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../image/favicon/favicon-16x16.png">
  <link rel="manifest" href="../../image/favicon/site.webmanifest">
  <title>株式会社インベード | INVADE Co., Ltd.</title>
  <script>
     $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
  </script>
</head>
<body>
 
<div class="contact-wrapper">
<section id="title">
      <div class="title-container">
        <h1><span>Contact</span></h1>
      </div>
    </section><!-- End title -->
    

  <main id="main">


    <!-- ======= About Section ======= -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        

        

        <div class="row">


          <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-12 col-sm-12 contact-us">
                  <div>
                    <div>
                      <h4 class="text-center">お問い合わせ 送信完了</h4>
                      <h5>Message Sent</h5>
                      <p class="text-center">
                      お問い合わせありがとうございました。<br>
                      内容を確認のうえ、回答させて頂きます。<br>
                      しばらくお待ちください。
                      </p>
                      <p class="text-center">Thank you for contacting us.  We will be responding to your message as soon as we can.
                        Click the button to go back to the main page.
                      </p>
                      <a href="index.php" class="text-center">
                        <button type="button" class="btn btn-primary">To Home Page</button>
                      </a>
                    </div>
                  </div>
          </div>


        </div>

      </div>
    </section><!-- End Contact Section -->



    <section class="footer fixed">
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
  <!-- ======= Footer ======= -->
</div>


</body>

</html>


