<?php 
  function createContactHeader() {
    return '
    <nav class="navbar navbar-expand-lg navbar-light bg-kmax">
    <div class="container-fluid">
      <a class="navbar-brand" href="/index.php"><img src="/assets/image/logo.png" alt="KAMI-1" height="40"></a>
      <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggler-icon top-bar"></span>
        <span class="toggler-icon middle-bar"></span>
        <span class="toggler-icon bottom-bar"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="https://kami-1.com/">大会概要</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/schedule/index.php">日程・結果</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://kami-1.com/entry">エントリー</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/movies/index.php">動画</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact/index.php">お問い合わせ</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
    ';
  }
  ?>